import { request } from '$lib/server/client'
import type { PageServerLoad } from './$types'
type Home = {
    blogs: any[]
    events: any[]
}
export const load: PageServerLoad = async function (event) {
    // const data = await request(event).Get<Home>('/home')
    // console.log(data)
    return {
        blogs: []
    }
}