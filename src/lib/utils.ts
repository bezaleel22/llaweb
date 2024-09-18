export const waitVisible = (el: string, callBack: (element: Element) => void) => {
    window.setTimeout(function () {
        var element = document.getElementsByClassName(el)[0];
        if (element) {
            // console.log('visible:', false);
            window.getComputedStyle(element).display === 'block' ? waitVisible(el, callBack) : callBack(element);
        } else {
            waitVisible(el, callBack);
        }
    }, 200)
}