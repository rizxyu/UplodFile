function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
var countDownDate = new Date("Apr 2, 2022 00:00:00").getTime();
    var x = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      document.getElementById("Hari").innerHTML = days + " Hari";
      document.getElementById("Jam").innerHTML = hours + " Jam";
      document.getElementById("Menit").innerHTML = minutes + " Menit";
      document.getElementById("Detik").innerHTML = seconds + " Detik";
      document.getElementById("all").innerHTML = days + " : " + hours + " : " + minutes + " : " + seconds;
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("count").innerHTML = "Ramadhan Sudah Di Mulai! Selamat Menunaikan Ibadah Puasa:)";
      }
    }, 1000);