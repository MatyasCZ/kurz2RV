function validate(form, event) {
    var emailValidator = new EmailValidator();
    var requiredValidator = new RequiredValidator();
    var validator = new OrderValidator(emailValidator, requiredValidator);
    var result = validator.validate(form);
    if (result.length !== 0) {
        event.preventDefault();
        window.alert(`Při odesílání informací formuláře došlo k následujícím chybám:\n - ${result.join('\n- ')}`);
    }
}