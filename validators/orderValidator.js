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
        var firstName = formObject.querySelector("#name");
        var lastName = formObject.querySelector("#surname");
        var email = formObject.querySelector('[type="email"]');
        var mobile = formObject.querySelector("#mobile");
        var street = formObject.querySelector("#street");
        var city = formObject.querySelector("#city");
        var postalcode = formObject.querySelector("#postalcode");
        var checkboxOne = formObject.querySelector("#ch1");
        var checkboxTwo = formObject.querySelector("#ch2");
        var checbkoxThree = formObject.querySelector("#ch3");
        var stuff = formObject.querySelector("#stuff");

        this.#validateRequired([firstName, lastName, email, mobile, street, city, postalcode])
        this.#validateEmail(email.value);
        this.#validateOrder(checkboxOne, checkboxTwo, checbkoxThree, stuff);

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

}