import './products-mobile.scss'

document.querySelectorAll('.product-mobile__button .button').forEach((buttonEl) => {
    buttonEl.onclick = function () {
        const type = this.getAttribute('data-type')
        document.querySelector(`.pricing-mobile__header-item_${type}`).click()
    }
})
