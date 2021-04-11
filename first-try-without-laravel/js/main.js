const validate = require("validate.js");

const constraints = {
  first_name: {
    presence: {allowEmpty: false}
  },
  last_name: {
    presence: {allowEmpty: false}
  },
  email: {
    presence: {allowEmpty: false},
    email: true
  },
  phone: {
    presence: {allowEmpty: false},
    phone: true
  },
  date_from: {
    presence: {allowEmpty: false},
  },
  time_from: {
    presence: {allowEmpty: false},
  },
  date_to: {
    presence: {allowEmpty: false},
  },
  time_to: {
    presence: {allowEmpty: false},
  },
  how_can_we_help: {
    presence: {allowEmpty: false}
  }
};

const form = document.getElementById('contact-form');

form.addEventListener('submit', function (event) {
  const formValues = {
    first_name: form.elements.first_name.value,
    last_name: form.elements.last_name.value,
    email: form.elements.email.value,
    phone: form.elements.phone.value,
    date_from: form.elements.date_from.value,
    time_from: form.elements.time_from.value,
    date_to: form.elements.time_from.value,
    time_to: form.elements.time_to.value,
    how_can_we_help: form.elements.how_can_we_help.value
  };

  const errors = validate(formValues, constraints);

  if (errors) {
    event.preventDefault();
    const errorMessage = Object
      .values(errors)
      .map(function (fieldValues) {
        return fieldValues.join(', ')
      })
      .join("\n");

    alert(errorMessage);
  }
}, false);
