import { error, type RequestEvent } from "@sveltejs/kit";
import { dev } from '$app/environment';
import { API_URL, LOCAL_API_URL } from "$env/static/private";

type RequestBody = Record<string, any>;

export const request = async ({ fetch, locals }: RequestEvent) => {
    let headers: Record<string, string> = {
        Accept: 'application/graphql+json, application/json',
        'Content-Type': 'application/json',
        "Authorization": `Bearer ${locals.token}`,
    };

    let url = dev ? LOCAL_API_URL : API_URL;
    if (!url) {
        throw new Error(
            'Could not find configured client URL. Please specify one in your .env file.'
        );
    }

    const fetchFn = async <T>(path: string, opts: { method?: string, body?: RequestBody } = {}): Promise<T> => {
        const { method = 'POST', body } = opts;
        const config: RequestInit = {
            method,
            headers,
        };
        if (body) {
            config.body = JSON.stringify(body);
        }

        const response = await fetch(`${url}${path}`, config);

        if (!response.ok) {
            throw error(response.status, response.statusText);
        }

        return await response.json().data as T;
    };

    return {
        // Cast the result of Get to a generic type T
        Get: async <T>(path: string): Promise<T> => {
            const response = await fetchFn<T>(path, { method: 'GET' });
            return response;
        },

        // Cast the result of Post to a generic type T
        Post: async <T>(path: string, variables: Record<string, any> = {}): Promise<T> => {
            const response = await fetchFn<T>(path, {
                method: 'POST',
                body: variables
            });
            return response;
        }
    };
};
