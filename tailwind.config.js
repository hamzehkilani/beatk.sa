/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                noor: ['noor', 'sans-serif'],
                shekari: ['shekari', 'sans-serif'],
                IBM: ['IBM', 'sans-serif'],

            },
            colors: {
                primary: "#7A69F3",
                textBlack:'#1E1E1E',
                yalo:"#FCC41C",
                secondry:"#7A69F3",
                thierd:"#2461A9",
                inputColor:"#7B7B7B",
                borderColor250:'#E7E7E7'


            },
            backgroundImage: {
                'custom-270': 'linear-gradient(103deg, hsla(245, 100%, 87%, 1) 0%, hsla(247, 85%, 68%, 1) 54%)',
                'custom-180':'linear-gradient(180deg, rgba(188, 171, 98, 0.04) 0%, rgba(188, 171, 98, 0.08) 100%)',
                'custom-login': 'linear-gradient(270deg, #FFFFFF 0%, rgba(255, 255, 255, 0) 100%)',
                'custom-ourVision': 'linear-gradient(269.69deg, #FFFFFF 0.26%, rgba(255, 255, 255, 0) 99.73%)',

            },

        },
    },
    extend: {
        direction: ['rtl', 'ltr'],
    },
    plugins: [
        require('flowbite/plugin'),
        function({ addUtilities }) {
            const newUtilities = {
              '.scrollbar-hide': {
                /* Hide scrollbar for modern browsers */
                '-ms-overflow-style': 'none',  /* Internet Explorer 10+ */
                'scrollbar-width': 'none',     /* Firefox */
              },
              '.scrollbar-hide::-webkit-scrollbar': {
                display: 'none', /* Safari and Chrome */
              }
            }

            addUtilities(newUtilities)
          }
    ]
};
