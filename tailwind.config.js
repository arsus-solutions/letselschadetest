/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                heading: ["Montserrat", "ui-sans-serif", "system-ui"],
                sans: ["Inter", "ui-sans-serif", "system-ui"],
            },
        },
    },
    plugins: [],
};
