class PasswordValidator {
    #messages = [];
    #numbers = "1234567890";
    #capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    #specialChars = "~!@#$%^&*_-+=`|(){}[]:;\"'<>,.?/";

    validate(password) {
        if (!(password.length >= 16 && password.length < 100)) {
            this.#messages.push("Heslo je příliš dlouhé nebo krátké.");
        }

        if (!password.split("").some((letter) => this.#capitals.includes(letter))) {
            this.#messages.push("Heslo neobsahuje velká písmena.");
        }

        if (!password.split("").some((letter) => this.#numbers.includes(letter))) {
            this.#messages.push("Heslo neobsahuje čísla.");
        }

        if (!password.split("").some((letter) => this.#specialChars.includes(letter))) {
            this.#messages.push("Heslo neobsahuje speciální znaky.");
        }

        return this.#messages;
    }
}