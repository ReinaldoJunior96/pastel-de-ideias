module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      screens: {
        'phone': '640px',
        // => @media (min-width: 640px) { ... }

        'tablet': '768px',
        // => @media (min-width: 768px) { ... }

        'laptop': '1024px',
        // => @media (min-width: 1024px) { ... }

        'desktop': '1280px',
        // => @media (min-width: 1280px) { ... }
      },
      colors:{
        'primary-color':"#E43636",
        'secondary-color':"#A03400",
        'optional-color':"#FFCA00",

      }
    },
  },
  plugins: [],
}
