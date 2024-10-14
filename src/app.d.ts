// See https://kit.svelte.dev/docs/types#app
// for information about these interfaces
declare global {
	namespace App {
		// interface Error {}
		interface Locals {
			token: string // vendure auth token
			user?: AuthUser
		}
		// interface PageData {}
		// interface PageState {}
		// interface Platform {}
	}

	declare function fetch<ResponseType = unknown>(
		input: RequestInfo | URL, init?: TypedRequestInit
	): Promise<TypedResponse<ResponseType>>;
	declare class HTTPError extends Error { }

}

export { };
