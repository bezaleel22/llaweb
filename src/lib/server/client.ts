import { error, type RequestEvent } from "@sveltejs/kit";
import { dev } from '$app/environment';
import { API_URL, LOCAL_API_URL } from "$env/static/private";

type RequestBody = Record<string, any>;

export const request = ({ fetch, locals }: RequestEvent) => {
    let url = dev ? LOCAL_API_URL : API_URL;
    if (!url) {
        throw new Error(
            'Could not find configured client URL. Please specify one in your .env file.'
        );
    }

    const fetchFn = async <T>(path: string, opts: { method?: string, body?: BodyInit } = {}): Promise<T> => {
        const { method, body } = opts;
        const config: RequestInit = {
            method,
            body,
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
                "Cookie": `schoolify_session=${locals.token}`,
            },

        };

        const response = await fetch(`${url}${path}`, config);
        if (!response.ok) {
            throw error(response.status, response.statusText);
        }

        return (await response.json()).data as T;
    };

    return {
        Get: async <T>(path: string): Promise<T> => await fetchFn<T>(path, { method: 'GET' }),
        Post: async <T>(path: string, body: BodyInit): Promise<T> => await fetchFn<T>(path, {
            method: 'POST',
            body
        }),

    };
};
