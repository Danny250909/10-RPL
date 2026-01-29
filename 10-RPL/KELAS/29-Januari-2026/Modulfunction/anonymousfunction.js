// setTimeout
setTimeout(function () {
  console.log("Selesai setelah 1 detik");
}, 1000);

// event (browser)
document.addEventListener("click", function () {
  console.log("Halaman diklik");
});

// array
[1, 2, 3].forEach(function (n) {
  console.log(n);
});

// IIFE anonim
(function () {
  console.log("Ini function anonim");
})();