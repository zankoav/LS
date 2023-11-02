import './pricing.scss'

const headerItems = document.querySelectorAll('.pricing__header-item')
headerItems.forEach((item) => {
    item.addEventListener('click', function () {
        headerItems.forEach((it) => {
            it.classList.remove('pricing__header-item_active')
            if (item === it) {
                it.classList.add('pricing__header-item_active')
            }
        })

        if (this.classList.contains('pricing__header-item_primary')) {
            document
                .querySelector('.pricing__content_primary')
                .classList.add('pricing__content_active')
            document
                .querySelector('.pricing__content_secondary')
                .classList.remove('pricing__content_active')
        } else if (this.classList.contains('pricing__header-item_secondary')) {
            document
                .querySelector('.pricing__content_primary')
                .classList.remove('pricing__content_active')
            document
                .querySelector('.pricing__content_secondary')
                .classList.add('pricing__content_active')
        }
    })
})

document.querySelectorAll('[data-required="yes"]').forEach((field) => {
    field.oninput = function () {
        this.parentNode
            .querySelector('.input-field__error-message')
            .classList.remove('input-field__error-message_active')
    }
})
const pricingFooter = document.querySelector('.pricing__content-footer')
const pricingButton = pricingFooter.querySelector('.button')

pricingButton.onclick = () => {
    let error = false
    let formData = {}

    const pricingContent = document.querySelector('.pricing__content_active')
    const requiredFields = pricingContent.querySelectorAll('[data-required="yes"]')

    requiredFields.forEach((field) => {
        const input = field.querySelector('.input-field__input')
        formData[input.name] = input.value
        if (!input.value) {
            field
                .querySelector('.input-field__error-message')
                .classList.add('input-field__error-message_active')
            error = true
        }
    })

    const addedField = pricingContent.querySelector('.textarea-field__textarea')
    formData[addedField.name] = addedField.value

    if (!error) {
        console.log('formData', formData)

        clearPricingCards()
        document.querySelector('.pricing__card_spinner').classList.add('pricing__card_active')
        setTimeout(() => {
            clearPricingCards()
            document.querySelector('.pricing__card_thank-you').classList.add('pricing__card_active')
        }, 5000)
        // show spinner
        // send data to server
        // show thank you
    }
}

function clearPricingCards() {
    document.querySelectorAll('.pricing__card').forEach((card) => {
        card.classList.remove('pricing__card_active')
    })
}