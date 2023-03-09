<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Tugas Sesi 05</title>
</head>
<body>
    <h1>Hello Javascript | Sesi 05</h1>

    <h1>Penggunaan variabel di JS</h1>

    <!-- Menampilkan Nama dan Lokasi -->
    <div id="nama"></div>
    <div id="lokasi"></div>

    <!-- Menampilkan number Di Js -->
    <div id="angka"></div>

    <!-- tipe data array -->
    <div id="transport"></div>

    <!-- tipe data objek -->
    <div id="manusia"></div>

    <!-- tipe aritmatika -->
    <div id="jumlah"></div>
    <div id="kurang"></div>
    <div id="kali"></div>
    <div id="bagi"></div>
    <div id="modulus"></div>
    
    <!-- function -->
    <div id="hasil"></div>
<script>
    console.log('hello JS')

    let nama = "workshop 4 days"
    let lokasi = 'online'
    let angka = 80
    let transportasi = ['mobil', 'motor', 'pesawat']
    // objek
    let manusia = {
        nama : 'wijaya',
        asal : 'jakarta',
        usia : 26,
    }

    let bilangan1= 2
    let bilangan2 = 3

    let jumlah = bilangan1 + bilangan2
    let kurang = bilangan1 - bilangan2
    let kali = bilangan1 * bilangan2
    let bagi = bilangan1 / bilangan2
    let modulus = bilangan1 % bilangan2

    document.getElementById('nama').innerHTML= nama;
    document.getElementById('lokasi').innerHTML = lokasi;
    document.getElementById('angka').innerHTML = angka;
    document.getElementById('transport').innerHTML = transportasi;
    document.getElementById('manusia').innerHTML = `nama saya adlah ${manusia.nama} tinggal di ${manusia.asal}` 

    document.getElementById('jumlah').innerHTML = `bilangan 1 adalah ${bilangan1} + bilangan 2 adalah ${bilangan2} = ${jumlah}`
    document.getElementById('kurang').innerHTML = `bilangan 1 adalah ${bilangan1} - bilangan 2 adalah ${bilangan2} = ${kurang}`
    document.getElementById('kali').innerHTML = `bilangan 1 adalah ${bilangan1} x bilangan 2 adalah ${bilangan2} = ${kali}`
    document.getElementById('bagi').innerHTML = `bilangan 1 adalah ${bilangan1} : bilangan 2 adalah ${bilangan2} = ${bagi}`
    document.getElementById('modulus').innerHTML = `bilangan 1 adalah ${bilangan1} % bilangan 2 adalah ${bilangan2} = ${modulus}`

    document.getElementById('hasil').innerHTML = desc()
    
    function desc() {
        document.getElementById('hasil').innerHTML = 'Haktiv'
        return '<b>Hacktiv8 Front End Web Developer</b>'
    }
    desc()
</script>
</body>
</html>