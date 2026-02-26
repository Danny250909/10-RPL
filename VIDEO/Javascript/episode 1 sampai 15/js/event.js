function tampil(b) {
    a = document.querySelector('p').innerText = 'Belajar Document Object Model Event ' + b;
    // a.innerText = 'Belajar DOM event';
    console.log('Belajar event js');

}


judul.onclick = function () {
    // console.log('Belajar event js menggunakan id');
    document.querySelector('.isi').innerHTML = 'Belajar event js menggunakan id';
    
};