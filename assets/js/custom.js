// Internationl Phone Field List With Validation For Banner Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#custom-lead-phone");
  const button = document.querySelector("#custom-lead-submit");
  const errorMsg = document.querySelector("#error-msg");
  const validMsg = document.querySelector("#valid-msg");
  const form = document.querySelector("#custom-lead-form"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Internationl Phone Field List With Validation For Contact Form
document.addEventListener("DOMContentLoaded", function () {
  const input = document.querySelector("#phone-contact");
  const button = document.querySelector("#phone-submit");
  const errorMsg = document.querySelector("#error-msg-contact");
  const validMsg = document.querySelector("#valid-msg-contact");
  const form = document.querySelector("#contactForm"); // Assuming the form has an ID of 'yourFormId'

  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: (callback) => {
      fetch("https://ipapi.co/json")
        .then((res) => res.json())
        .then((data) => callback(data.country_code))
        .catch(() => callback("us"));
    },
    strictMode: true,
    separateDialCode: true,
    fixDropdownWidth: true,
    validationNumberType: "MOBILE",
    nationalMode: true,
    hiddenInput: () => ({ phone: "phonenumber", country: "country_code" }),
  });

  const errorMap = [
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
    "phone number is not valid.",
  ];

  const reset = () => {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  const showError = (msg) => {
    input.classList.add("error");
    errorMsg.innerHTML = msg;
    errorMsg.classList.remove("hide");
  };

  form.addEventListener("submit", (event) => {
    reset();
    let valid = true;

    if (!input.value.trim()) {
      showError("please enter phone number.");
      valid = false;
    } else if (iti.isValidNumber()) {
      // validMsg.classList.remove("hide");
    } else {
      const errorCode = iti.getValidationError();
      const msg = errorMap[errorCode] || "phone number is not valid.";
      showError(msg);
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });

  input.addEventListener("change", reset);
  input.addEventListener("keyup", reset);
});

// Reviews Carousel JS
$(document).ready(function () {
  $("#reviews-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    responsiveClass: true,

    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1,
        nav: false,
        loop: false,
      },
    },
  });
});
