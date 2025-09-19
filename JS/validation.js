document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("loginForm");

    form.addEventListener("submit", (e) => {
        // Obtener valores y spans
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
        const usernameError = document.getElementById("username-error");
        const passwordError = document.getElementById("password-error");

        usernameError.textContent = "";
        passwordError.textContent = "";

        let valid = true;

        if (username === "") {
            usernameError.textContent = "Please, enter your username";
            usernameError.style.color = "red";
            valid = false;
        }

        if (password === "") {
            passwordError.textContent = "Please, enter your password";
            passwordError.style.color = "red";
            valid = false;
        }

        if (!valid) {
            e.preventDefault();
        }
    });
});
