(function () {
  console.log("Program dimulai");
})();

(() => {
  console.log("Arrow IIFE");
})();

(function (n) {
  console.log("Nilai:", n);
})(10);

(() => {
  let x = 5;
  console.log(x * 2);
})();
