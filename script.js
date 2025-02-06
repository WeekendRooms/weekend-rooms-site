// script.js

document.getElementById('booking-form').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Grazie per aver prenotato! Ti contatteremo a breve per confermare il soggiorno.');
  this.reset();
});
