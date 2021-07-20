//TOP NAV MOBILE ICON TOGGLE
const selectElement = (element) => document.querySelector(element);
selectElement('.menu-icon').addEventListener('click', () => {
  selectElement('nav').classList.toggle('active');
});
