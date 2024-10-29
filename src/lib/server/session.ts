import { dev } from '$app/environment';
import { env } from '$env/dynamic/private';
import { parseAuthCookie } from '$lib/utils';
import { error, type RequestEvent } from '@sveltejs/kit';

export const setUserSession = async function (event: RequestEvent): Promise<RequestEvent> {
    event.locals.XSRF = event.cookies.get('XSRF-TOKEN') || ''
    event.locals.token = event.cookies.get('schoolify_session') || ''
    // console.log(parseJwt(event.locals.token));
    if (!event.locals.token && !event.locals.XSRF) {
        try {
            const url = dev ? env.LOCAL_API_URL : env.PROD_API_URL;
            const response = await fetch(`${url}/auth`);
            if (!response.ok) {
                throw error(response.status, 'Login failed');
            }
            const data = await response.json()
            const cookies = response.headers.getSetCookie()
            const locals = await parseAuthCookie(cookies, event.cookies)
            // console.log({ cookies, data })
            if (!locals) throw error(401, 'Unauthorized');

            event.locals.token = locals.token;
            event.locals.XSRF = locals.XSRF;
            
        } catch (err) {
            console.error(err);
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

