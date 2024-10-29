import { request } from '$lib/server/client'
import type { PageServerLoad } from './$types'
export const load: PageServerLoad = async function (event) {
    // const data = await request(event).Get('/blogs')
    // console.log(data)
    return {}
}