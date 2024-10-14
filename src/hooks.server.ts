import { setUserSession } from '$lib/server/session'
import type { Handle } from '@sveltejs/kit'

export const handle: Handle = async ({ event, resolve }) => {

    if (event.url.pathname.startsWith('/checkout/success')) {
        event = await setUserSession(event)
    }
    event = await setUserSession(event)
    const response = await resolve(event)
    response.headers.set('X-Frame-Options', 'DENY')
    response.headers.set('X-Content-Type-Options', 'nosniff')
    response.headers.set('Referrer-Policy', 'strict-origin-when-cross-origin')
    response.headers.set('Permissions-Policy', 'payment=(self "https://js.stripe.com/"), accelerometer=(), camera=(), display-capture=(), encrypted-media=(), fullscreen=(), gyroscope=(), hid=(), interest-cohort=(), magnetometer=(), microphone=(), midi=(), picture-in-picture=(), publickey-credentials-get=(), sync-xhr=(), usb=(), xr-spatial-tracking=(), geolocation=()')
    return response
}