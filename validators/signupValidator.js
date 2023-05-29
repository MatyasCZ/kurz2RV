class SignupValidator {
    #messages = [];
    #emailValidator;
    #requiredValidator;
    #passwordValidator;

    constructor(emailValidator, requiredValidator, passwordValidator) {
        this.#emailValidator = emailValidator;
        this.#requiredValidator = requiredValidator;
        this.#passwordValidator = passwordValidator;
    }

    validate(formObject) {
        this.#messages = [];
        var email = formObject.querySelector('[type="email"]');
        var passwords = formObject.querySelectorAll('[type="password"]');
        var firstName = formObject.querySelector("#FirstName");
        var lastName = formObject.querySelector("#LastName");
        var phone = formObject.querySelector("#phone");
        var street = formObject.querySelector("#street");
        var town = formObject.querySelector("#town");
        var postalCode = formObject.querySelector("#postalcode");
        var rulesCheckbox = formObject.querySelector("#rules");
        var gdprCheckbox = formObject.querySelector("#GDPR");

        this.#validateRequired([email, passwords[0], passwords[1], firstName, lastName, phone, street, town, postalCode, rulesCheckbox, gdprCheckbox]);
        this.#validateEmail(email.value);
        this.#validatePassword(passwords[0].value);
        this.#validateConfirmPassword(passwords[0].value, passwords[1].value);
        this.#validateCheckbox(rulesCheckbox, "rules");
        this.#validateCheckbox(gdprCheckbox, "GDPR");

        return this.#messages;
    }

    #validateRequired(elements) {
        var results = this.#requiredValidator.validate(elements);
        if (results.length !== 0) {
            this.#messages.push("Některá pole nejsou vyplněná.");
        }
    }

    #validateEmail(email) {
        if (!this.#emailValidator.validate(email)) {
            this.#messages.push("Email má nesprávný formát.");
        }
    }

    #validatePassword(password) {
        var result = this.#passwordValidator.validate(password);
        if (result.lentgh !== 0) {
            result.forEach(message => {
                this.#messages.push(message);
            });
        }
    }

    #validateConfirmPassword(password, confirmPassword) {
        if (confirmPassword !== password) {
            this.#messages.push("Hesla se neshodují.");
        }
    }

    #validateCheckbox(checkbox, name) {
        if (!checkbox.checked) {
            this.#messages.push("Musíte souhlasit s pravidly Věrnostního programu a zpracováním osobních údajů.");
        }
    }
}