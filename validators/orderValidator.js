class OrderValidator {
    #messages = [];
    #emailValidator;
    #requiredValidator;

    constructor(emailValidator, requiredValidator) {
        this.#emailValidator = emailValidator;
        this.#requiredValidator = requiredValidator;
    }

    validate(formObject) {
        this.#messages = [];
        var nameInput = formObject.querySelector('#name');
        var surnameInput = formObject.querySelector('#surname');
        var email = formObject.querySelector('[type="email"]');
        var mobileInput = formObject.querySelector('#mobile');
        var streetInput = formObject.querySelector('#street');
        var cityInput = formObject.querySelector('#city');
        var postalcodeInput = formObject.querySelector('#postalcode');

        this.#validateRequired([nameInput, surnameInput, email, mobileInput, streetInput, cityInput, postalcodeInput]);
        this.#validateEmail(email.value);
        this.#validateMobile(mobileInput.value);

        return this.#messages;
    }

    #validateRequired(elements) {
        var results = this.#requiredValidator.validate(elements);
        if (results.length !== 0) {
            this.#messages.push("Některá pole nejsou vyplněná.")
        }
    }

    #validateEmail(email) {
        if (!this.#emailValidator.validate(email)) {
            this.#messages.push("Email má nesprávný formát.");
        }
    }

    #validateMobile(mobile) {
        const mobileRegex = /^\d{9}$/;
        if (!mobileRegex.test(mobile)) {
            this.#messages.push("Nesprávný formát telefonního čísla. Zadejte devítimístné číslo.");
        }
    }
}