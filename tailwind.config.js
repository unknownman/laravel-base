const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Noto Sans Arabic", ...defaultTheme.fontFamily.sans],
                serif: ["Noto Sans Arabic", ...defaultTheme.fontFamily.sans],
                body: ["Noto Sans Arabic", ...defaultTheme.fontFamily.sans],
                base: ["Noto Sans Arabic", ...defaultTheme.fontFamily.sans],
                mono: ["Noto Sans Arabic", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwind-scrollbar-hide"),
    ],
};
