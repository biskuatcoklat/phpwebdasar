//ambil elemnet yang kita butuhkan
var keyword = document.getElementById('keyword');
//(js tolong carikan elemnet yangidnya keyword)
var tombolcari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
    //buat objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readystate == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET', 'ajax/karyawan.php?keyword=' + keyword.value, true);
    xhr.send();

});

