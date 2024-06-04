import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
      screens: {
        xs: '240px',
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
        extend: {
          colors: {
            custom: {
              gold: '#BF9F63',
              lightGold: '#F2CC85',
              brown: '#8C6B42',
              beige: '#BFAC95',
              lightBeige: '#F2F2F2',
            },
          },
        },
      },

    plugins: [forms, typography],
};
