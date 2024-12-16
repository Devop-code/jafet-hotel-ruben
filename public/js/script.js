const testimonialSwiper = ()=> {
    const swiper = document.querySelector('#testimonials .swiper')

    if (! swiper) {
        return
    }

    new Swiper(swiper, {
        speed: 400,
        loop: true,

        pagination: {
            el: '.swiper-pagination',
        },

        slidesPerView: 1,
        spaceBetween: 40,

        breakpoints: {
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            }
        }
    })
}

/**
 * 
 * @param {HTMLFormElement} form 
 * @param {Boolean} flag 
 */
const disable = (form, flag=true)=> {
    [
        ...form.querySelectorAll('input'),
        ...form.querySelectorAll('button'),
        ...form.querySelectorAll('textarea')
    ].forEach(el => {
        el.disabled = flag
    })
}


const newsletterRegistration = ()=> {
    const newsletterForm = document.querySelector('#newsletter-form')

    if (! newsletterForm) {
        return
    }
    const email = document.querySelector('#news-email')
    const submit = newsletterForm.querySelector('button[type="submit"]')
    const newsletterMsg = document.querySelector('#newsletter-msg')

    const csrfToken = document.head.querySelector('[name="csrf-token"]')

    /**
     * 
     * @param {String} message 
     * @param {Boolean} flag
     */
    const setNewsError = (message, flag=true)=> {
        if (flag) {
            newsletterMsg.innerHTML = message
        }
        else {
            newsletterMsg.innerHTML = ''
        }
    }

    const setNewsSuccess = (message)=> {
        newsletterMsg.classList.replace('text-danger', 'text-success')
        newsletterMsg.innerHTML = message
    }

    newsletterForm.addEventListener('submit', (e)=>  {
        e.preventDefault()
        let invalidForm = false

        disable(newsletterForm)
        setNewsError('', false)
        submit.innerHTML = 'Patientez'

        fetch(newsletterForm.getAttribute('action'), {
            'method': newsletterForm.getAttribute('method'),
            'cache': 'no-cache',
            'headers': {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken.content
            },
            body: JSON.stringify({'email': email.value})
        })
        .then(response => {
            disable(newsletterForm, false)
            submit.innerHTML = 'S\'inscrire'

            switch (response.status) {
                case 200:
                    email.value = ''

                    disable(newsletterForm)
                    setNewsSuccess('Vous avez été ajouté avec succès à notre newsletter.')
                    break
            
                case 429:
                    let sec = response.headers.get('X-Retry-After')

                    setNewsError(
                        `Trop d\'essais. Veuillez essayer de nous dans ${sec} secondes.`
                    )
                    break

                case 422:
                    invalidForm = true
                    return response.json()
                default:
                    setNewsError(
                        'Une erreur inattendue est survenue.'
                    )
                    break;
            }
        })
        .then(json => {
            if (! invalidForm) {
                return
            }
            setNewsError(json.errors.email)
        })
    })
}

document.addEventListener('DOMContentLoaded', ()=>{
    testimonialSwiper()
    newsletterRegistration()
})