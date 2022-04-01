module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        "dark-purple": "linear-gradient(#e66465, #9198e5)", 
        "light-white": "rgba(255, 255, 255, 0.17)",
      },
      fontFamily:{
        'sans': ['Helvetica', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
