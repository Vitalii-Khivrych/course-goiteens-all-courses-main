const { colors } = require(`tailwindcss/defaultTheme`);

module.exports = {
  content: ['./src/**/*.{html,js,json}'],
  theme: {
    // MEDIA QUERIES
    screens: {
      sm: '480px',
      md: '768px',
      xl: '1280px',
      smOnly: { max: '767.98px' },
      mdOnly: { min: '768px', max: '1279.98px' },
      notXl: { max: '1279.98px' },
    },
    // BASE FONT
    fontFamily: {
      gotham_pro: ['Gotham Pro', 'sans-serif'], // class="font-gotham_pro"
      caveat: ['Caveat', 'cursive'], // class="font-caveat"
    },
    // SHADOW
    boxShadow: {
      orange: '2px 8px 29px rgba(240, 127, 46, 0.2)', // class="shadow-orange"
      main: '0px 2px 15px rgba(0, 0, 0, 0.2)',
    },
    // THEME
    extend: {
      backgroundColor: theme => ({
        ...theme('colors'),
      }),
      backgroundImage: {
        check: "url('../images/agree-checkbox.svg')",
      },
      // ALL COLORS
      colors: {
        body: '#E2F7F9', // class="bg-body"
        primary: '#2B2B2B',
        accent: '#5B5BEF',
        button: '#FEC830',
        placeholder: '#757575',
        error: {
          background: '#FDE3E3',
          stroke: '#FF0000',
        },
        violet: 'rgba(91, 91, 239, 0.09)',
        violet_light: '#E7E7FF',
        grey: '#C4C4C44A',
        disabled: 'rgba(91, 91, 239, 0.5)',
      },
      boxShadow: {
        DEFAULT: '0px 2px 15px rgba(0, 0, 0, 0.2)',
        btn: '0 0 4px 0 #FEC830 inset, 0 0 4px 4px #FEC830',
        btn_blue: '0 0 4px 0 #5B5BEF inset, 0 0 4px 4px #5B5BEF',
        freeLesson: '0px 4px 50px rgba(0, 0, 0, 0.15)',
        formChoose: '0px 4px 50px rgba(0, 0, 0, 0.2);',
      },
      // CONTAINER
      container: {
        center: true,
        padding: {
          DEFAULT: '1.25rem',
          sm: '1.25rem',
          md: '2rem',
          xl: '2rem',
        },
      },
      // KEYFRAMES
      keyframes: {
        side: {
          '0%, 100%': { transform: 'translateX(25%)' },
          '50%': { transform: ' translateY(0)' },
        },
      },
      // ANIMATION
      animation: {
        side: 'side 1s ease-in-out infinite',
      },
    },
  },
  plugins: [],
};
