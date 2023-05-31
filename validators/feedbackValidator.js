class FeedbackValidator {
    #messages = [];
    #emailValidator;
    #requiredValidator;

    constructor(emailValidator, requiredValidator) {
        this.#emailValidator = emailValidator;
        this.#requiredValidator = requiredValidator;
    }

    validate(formObject) {
        this.#messages = [];
        const email = formObject.querySelector('#email');
        const subject = formObject.querySelector('#subject');
        const textarea = formObject.querySelector('#textarea');

        this.#validateEmail(email.value);
        this.#validateRequired([email, subject, textarea]);

        return this.#messages;
    }

    #validateEmail(email) {
        if (!this.#emailValidator.validate(email)) {
            this.#messages.push("Email má nesprávný formát.");
        }
    }

    #validateRequired(elements) {
        const results = this.#requiredValidator.validate(elements);
        if (results.length !== 0) {
            this.#messages.push("Některá pole nejsou vyplněná.");
        }
    }
}





