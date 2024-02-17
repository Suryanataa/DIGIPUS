/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundColor: {
                primary: "#395886",
                secondary: "#40608D",
                aksen: "#CCB484",
                dasar: "#F0F3FA",
            },
            colors: {
                primary: "#395886",
                secondary: "#40608D",
                aksen: "#CCB484",
                dasar: "#F0F3FA",
            },
            borderColor: {
                primary: "#395886",
                secondary: "#40608D",
                aksen: "#CCB484",
                dasar: "#F0F3FA",
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
