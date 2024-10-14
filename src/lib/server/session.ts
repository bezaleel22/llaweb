import { dev } from '$app/environment';
import { env } from '$env/dynamic/private';
import { error, type RequestEvent } from '@sveltejs/kit';

export const setUserSession = async function (event: RequestEvent): Promise<RequestEvent> {
    event.locals.token = event.cookies.get('auth_token') || '';
    if (!event.locals.token) {
        try {
            const url = dev ? env.LOCAL_API_URL : env.PROD_API_URL;
            const response = await fetch(`${url}/login`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    email: env.LOGIN_EMAIL, // Use environment variables for credentials
                    password: env.LOGIN_PASSWORD
                })
            });

            if (!response.ok) {
                throw error(response.status, 'Login failed');
            } 

            const session = (await response.json()).data;
            if (!('accessToken' in session) || !('userDetails' in session)) {
                throw error(401, 'Unauthorized');
            }

            const jwtPayload = parseJwt(session.accessToken);
            if (jwtPayload && jwtPayload.exp) {
                const currentTime = Math.floor(Date.now() / 1000); // Current time in seconds
                const maxAge = jwtPayload.exp - currentTime; // Remaining time in seconds
                
                if (maxAge > 0) {
                    event.cookies.set('auth_token', session.accessToken, {
                        path: '/',
                        maxAge: maxAge, // Use the JWT expiration for the cookie maxAge
                        sameSite: 'strict',
                        httpOnly: true,
                        secure: true
                    });
                }

            } else {
                throw error(401, 'Invalid token');
            }

            event.locals.token = session.accessToken;
            event.locals.user = session.userDetails;
        } catch (err) {
            console.error(err); // Log the error for debugging
            throw error(500, 'Internal Server Error');
        }
    }

    return event; // Return the modified event
};

const parseJwt = (token: string) => {
    try {
        return JSON.parse(atob(token.split('.')[1]));
    } catch (e) {
        console.error('Failed to parse JWT:', e); // Log parsing errors
        return null; // Return null if parsing fails
    }
};

