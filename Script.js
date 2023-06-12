const customBtn = document.querySelector('.custom-btn');
const sidebar = document.querySelector('.sidebar');

customBtn.addEventListener('click', function() {
  this.classList.toggle('click');
  sidebar.classList.toggle('show');
});
