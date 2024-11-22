/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/views/layouts/panel.blade.php", // File panel
      "./resources/views/pages/index.blade.php",   // File index
      "./resources/views/pages/detail.blade.php",  // File detail
      "./resources/views/pages/reservasi.blade.php", // File reservasi
      "./resources/views/pages/registrasi.blade.php", // File registrasi
      "./resources/views/pages/syarat.blade.php", // File syarat
      "./resources/views/pages/registrasi/tata-tertib.blade.php" // File syarat
  ],
  theme: {
      extend: {
          colors: {
              primary: '#001A3B',
              secondary: '#9BDCFC',
              quote: '#607680',
              text: '#001A3B',
              red: '#D64045',
          },
          boxShadow: {
              'custom': '0px 0px 31.5px 4.2px rgba(155, 220, 252, 0.7)',
          },
      },
  },
  plugins: [],
};
