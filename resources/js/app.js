import "./bootstrap";

const registerForm = document.getElementById("register-form");
const registerFormInputs = document.getElementById("register-form-inputs");
const errorContainer = document.getElementById("error-container");
const errorDiv = document.createElement("div");

// Regular expression for email validation
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Function to display validation error messages below the input fields
function makeErrorDiv(message) {
    errorDiv.className = "validation-error";
    errorDiv.classList.add("text-sm", "text-red-500", "w-full", "bottom-0");
    errorDiv.textContent = message;
    return errorDiv;
}

// Function to remove validation error messages
function removeAllValidationErrors() {
    const errorDivs = document.querySelectorAll(".validation-error");
    errorDivs.forEach((errorDiv) => {
        errorDiv.remove();
    });
}

// Add event listener to the form's submit event
if (registerForm) {
    registerForm.addEventListener("submit", function (event) {
        // Prevent the form from submitting by default
        event.preventDefault();

        // Remove all existing validation error messages
        removeAllValidationErrors();

        // Get the values of the form fields
        const name = document.getElementById("name").value;
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const passwordConfirm =
            document.getElementById("password-confirm").value;

        // Array to store validation error messages
        let errorMessages = [];

        // Perform basic validation
        if (name.trim() === "") {
            errorMessages.push("Please enter your name.");
        }

        if (name.trim().length < 3) {
            errorMessages.push("Your name should have 3 or more characters.");
        }

        if (username.trim() === "") {
            errorMessages.push("Please enter a username.");
        }

        if (username.trim().length < 3) {
            errorMessages.push(
                "Your username should have 3 or more characters."
            );
        }

        if (!emailRegex.test(email)) {
            errorMessages.push("Please enter a valid email address.");
        }

        if (password.trim() === "" || passwordConfirm.trim() === "") {
            errorMessages.push("Please enter a password.");
        }

        if (password.length < 8 || passwordConfirm.length < 8) {
            errorMessages.push("Passwords should have 8 or more characters.");
        }

        if (password !== passwordConfirm) {
            errorMessages.push("Passwords do not match.");
        }

        // Display all validation error messages
        errorMessages.forEach((message) => {
            const errorDiv = makeErrorDiv(message);
            errorContainer.appendChild(errorDiv);
        });

        if (errorMessages.length === 0) {
            // If there are no validation errors, submit the form
            registerFormInputs.classList.add("hidden");
            registerForm.submit();
        }
    });
}

// Newsletter Form

// validate the email address and submit if validation is successful

const newsletterForm = document.getElementById("newsletterForm");

if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const email = document.getElementById("newsletterEmail").value;

        const errorMessages = [];

        if (!emailRegex.test(email)) {
            errorMessages.push("Please enter a valid email address.");

            errorMessages.forEach((message) => {
                makeErrorDiv(message);
            });

            newsletterForm.appendChild(errorDiv);
        }

        if (errorMessages.length === 0) {
            newsletterForm.submit();
        }
    });
}

// Employee Delete Confirmation Modal

// Using the window object to expose the show and hide functions to the global scope

window.confirmDelete = function() {
    // Show the modal
    document.getElementById("confirmModal").style.display = "block";
};

window.closeModal = function() {
    // Close the modal
    document.getElementById("confirmModal").style.display = "none";
};

