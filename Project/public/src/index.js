//waktu real time
const waktu = document.getElementById("realTime");
let waktuSekarang = new Date();

// Mendapatkan tanggal, jam, menit, dan detik saat ini
// let tanggal = waktuSekarang.getDate();
// let bulan = waktuSekarang.getMonth() + 1; // Ingatlah bahwa bulan dimulai dari 0 (Januari adalah 0)
// let tahun = waktuSekarang.getFullYear();
// let jam = waktuSekarang.getHours();
// let menit = waktuSekarang.getMinutes();
// let detik = waktuSekarang.getSeconds();

// // Menampilkan waktu real-time
//     waktu.innerHTML = `${tanggal} - ${bulan} - ${tahun}`;


function handleKeyPress(event) {
  if (event.key === "Enter") {
    // Tindakan yang akan dijalankan saat tombol "Enter" ditekan
    const data1 = document.getElementById('td1');
    const data2 = document.getElementById('td2');
    const data3 = document.getElementById('td3');
    const data4 = document.getElementById('td4');
    const data5 = document.getElementById('td5');
    const data6 = document.getElementById('td6');
    const data7 = document.getElementById('td7');
    const totalHarga = document.getElementById('tot');
    const totalHarga1 = document.getElementById('tot1');

    data1.innerHTML = "1";
    data2.innerHTML = "BRG123"
    data3.innerHTML = barang.value
    data4.innerHTML = "1"
    data5.innerHTML = "Rp.20.000"
    data6.innerHTML = "0%"
    let harga = 20000
    data7.innerHTML = `Rp.${harga}`
    totalHarga.innerHTML = `Rp.${harga}`
    totalHarga1.innerHTML = `Rp.${harga}`
  }
}



document.getElementById('bayar1').addEventListener("click", function(){
    alert("Pembayaran Berhasil");
})


// document.getElementById('cariBarang').addEventListener("keydown" ,function(){
//     const data1 = document.getElementById('td1');
//     const data2 = document.getElementById('td2');
//     const data3 = document.getElementById('td3');
//     const data4 = document.getElementById('td4');
//     const data5 = document.getElementById('td5');
//     const data6 = document.getElementById('td6');
//     const data7 = document.getElementById('td7');
//     const totalHarga = document.getElementById('tot');
//     const totalHarga1 = document.getElementById('tot1');

//     data1.innerHTML = "1";
//     data2.innerHTML = "BRG123"
//     data3.innerHTML = barang.value
//     data4.innerHTML = "1"
//     data5.innerHTML = "Rp.20.000"
//     data6.innerHTML = "0%"
//     let harga = 20000
//     data7.innerHTML = `Rp.${harga}`
//     totalHarga.innerHTML = `Rp.${harga}`
//     totalHarga1.innerHTML = `Rp.${harga}`
// })

const barang = document.getElementById('cariBarang');

function tambahBarang(){
    const data1 = document.getElementById('td1');
    const data2 = document.getElementById('td2');
    const data3 = document.getElementById('td3');
    const data4 = document.getElementById('td4');
    const data5 = document.getElementById('td5');
    const data6 = document.getElementById('td6');
    const data7 = document.getElementById('td7');
    const totalHarga = document.getElementById('tot');
    const totalHarga1 = document.getElementById('tot1');

    data1.innerHTML = "1";
    data2.innerHTML = "BRG123"
    data3.innerHTML = barang.value
    data4.innerHTML = "1"
    data5.innerHTML = "Rp.20.000"
    data6.innerHTML = "0%"
    let harga = 20000
    data7.innerHTML = `Rp.${harga}`
    totalHarga.innerHTML = `Rp.${harga}`
    totalHarga1.innerHTML = `Rp.${harga}`
}





// function pindahHalaman(){
//     window.location.href = "main";
// }



// code overlay pada page barang
