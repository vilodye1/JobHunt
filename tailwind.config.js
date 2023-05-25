import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px'
      },
      extend: {
        colors: {
          platinum: 'hsl(222, 15%, 87%)',
          powderBlue: 'hsl(211, 29%, 74%)',
          moonstone: 'hsl(188, 36%, 52%)',
          hover: '#FF923F',
          royalBlue: 'hsl(222, 82%, 21%)',
          darkGrayishBlue: 'hsl(227, 12%, 61%)',
          charcoal: 'hsl(222, 19%, 27%)',
          veryLightGray: 'hsl(0, 0%, 98%)',
          veryLightBlue: '#E9F4FF'
        }
      },
    },

    plugins: [forms],
};
