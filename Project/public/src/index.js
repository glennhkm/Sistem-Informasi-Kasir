// // //waktu real time
// // const waktu = document.getElementById("realTime");
// // let waktuSekarang = new Date();

// // // Mendapatkan tanggal, jam, menit, dan detik saat ini
// // // let tanggal = waktuSekarang.getDate();
// // // let bulan = waktuSekarang.getMonth() + 1; // Ingatlah bahwa bulan dimulai dari 0 (Januari adalah 0)
// // // let tahun = waktuSekarang.getFullYear();
// // // let jam = waktuSekarang.getHours();
// // // let menit = waktuSekarang.getMinutes();
// // // let detik = waktuSekarang.getSeconds();

// // // // Menampilkan waktu real-time
// // //     waktu.innerHTML = `${tanggal} - ${bulan} - ${tahun}`;


// // function handleKeyPress(event) {
// //   if (event.key === "Enter") {
// //     // Tindakan yang akan dijalankan saat tombol "Enter" ditekan
// //     const data1 = document.getElementById('td1');
// //     const data2 = document.getElementById('td2');
// //     const data3 = document.getElementById('td3');
// //     const data4 = document.getElementById('td4');
// //     const data5 = document.getElementById('td5');
// //     const data6 = document.getElementById('td6');
// //     const data7 = document.getElementById('td7');
// //     const totalHarga = document.getElementById('tot');
// //     const totalHarga1 = document.getElementById('tot1');

// //     data1.innerHTML = "1";
// //     data2.innerHTML = "BRG123"
// //     data3.innerHTML = barang.value
// //     data4.innerHTML = "1"
// //     data5.innerHTML = "Rp.20.000"
// //     data6.innerHTML = "0%"
// //     let harga = 20000
// //     data7.innerHTML = `Rp.${harga}`
// //     totalHarga.innerHTML = `Rp.${harga}`
// //     totalHarga1.innerHTML = `Rp.${harga}`
// //   }
// // }



// // document.getElementById('bayar1').addEventListener("click", function(){
// //     alert("Pembayaran Berhasil");
// // })


// // // document.getElementById('cariBarang').addEventListener("keydown" ,function(){
// // //     const data1 = document.getElementById('td1');
// // //     const data2 = document.getElementById('td2');
// // //     const data3 = document.getElementById('td3');
// // //     const data4 = document.getElementById('td4');
// // //     const data5 = document.getElementById('td5');
// // //     const data6 = document.getElementById('td6');
// // //     const data7 = document.getElementById('td7');
// // //     const totalHarga = document.getElementById('tot');
// // //     const totalHarga1 = document.getElementById('tot1');

// // //     data1.innerHTML = "1";
// // //     data2.innerHTML = "BRG123"
// // //     data3.innerHTML = barang.value
// // //     data4.innerHTML = "1"
// // //     data5.innerHTML = "Rp.20.000"
// // //     data6.innerHTML = "0%"
// // //     let harga = 20000
// // //     data7.innerHTML = `Rp.${harga}`
// // //     totalHarga.innerHTML = `Rp.${harga}`
// // //     totalHarga1.innerHTML = `Rp.${harga}`
// // // })

// // const barang = document.getElementById('cariBarang');

// // function tambahBarang(){
// //     const data1 = document.getElementById('td1');
// //     const data2 = document.getElementById('td2');
// //     const data3 = document.getElementById('td3');
// //     const data4 = document.getElementById('td4');
// //     const data5 = document.getElementById('td5');
// //     const data6 = document.getElementById('td6');
// //     const data7 = document.getElementById('td7');
// //     const totalHarga = document.getElementById('tot');
// //     const totalHarga1 = document.getElementById('tot1');

// //     data1.innerHTML = "1";
// //     data2.innerHTML = "BRG123"
// //     data3.innerHTML = barang.value
// //     data4.innerHTML = "1"
// //     data5.innerHTML = "Rp.20.000"
// //     data6.innerHTML = "0%"
// //     let harga = 20000
// //     data7.innerHTML = `Rp.${harga}`
// //     totalHarga.innerHTML = `Rp.${harga}`
// //     totalHarga1.innerHTML = `Rp.${harga}`
// // }





// // // function pindahHalaman(){
// // //     window.location.href = "main";
// // // }



// // // code overlay pada page barang


// DOM Elements 
// const searchInput = document.getElementById('searchInput');
// const searchResults = document.getElementById('searchResults');
// const cartTable = document.getElementById('cartTable');
// const cartBody = document.getElementById('cartBody');
// const tombolBayar = document.getElementById('bayar');

// searchResults.classList.add('hidden');

// // Cart
// let cart = [];
// let counter = 0;
// let qty = 1;

// function addToCart(barang) {
    
// const item = cart.find(i => i.id == barang.id);

// if(item) {
//  let qtyAwal = item.qty;
//  item.qty++;
//  item.sub_total = (item.sub_total / qtyAwal) * item.qty
// } else {
//     counter++;
//     cart.push({
//      iteration: counter,  
//      id: barang.id,
//      nama_barang: ucwords(barang.nama_barang),
//      qty: qty,
//      harga: barang.harga,
//      diskon: barang.diskon*1,
//      sub_total: barang.harga - (barang.harga*(barang.diskon/100)) * qty,
//      stok: barang.stok,
//      isEditMode: false
//  });
// }

// renderCart();

// }

// function removeFromCart(id) {

// cart = cart.filter(item => item.id != id);

// renderCart();

// }
// function updateSubTotal(item) {
// item.sub_total = item.qty * (item.harga-(item.harga*(item.diskon/100)));

// renderCart();
// }

// function toggleEdit(itemId) {
// const item = cart.find(item => item.id == itemId);

// item.isEditMode = !item.isEditMode;

// renderCart();
// }

// function renderCart() {
// // Pastikan elemen cartBody telah didefinisikan
// const cartBody = document.getElementById('cartBody');

// // Kosongkan isi cartBody
// cartBody.innerHTML = '';


// let sumSubTotal = 0;
// let sumTotal = 0;
// // Loop melalui setiap item di keranjang
// cart.forEach((item, index) => {
 
//  // Buat elemen baris baru
//  const tr = document.createElement('tr');
 
//  // Buat elemen-elemen td di dalam baris
//  const iterationTd = document.createElement('td');
//  iterationTd.classList.add('border', 'border-black', 'w-12', 'h-10');
//  iterationTd.innerHTML = item.iteration;
 
//  const idTd = document.createElement('td');
//  idTd.classList.add('border', 'border-black', 'w-36');
//  idTd.innerHTML = item.id;
 
//  const namaTd = document.createElement('td');
//  namaTd.classList.add('border', 'border-black', 'w-52');
//  namaTd.innerHTML = ucwords(item.nama_barang);
 
//  let qtyTd;
//  if(item.isEditMode) {  
//      // Jika edit mode, buat input quantity
//      const qtyInput = document.createElement('input');
//      qtyInput.type = 'number';
//      qtyInput.classList.add('w-14', 'border-none', 'text-center', 'h-[2.4rem]', 'focus:outline-none');
//      qtyInput.value = item.qty;
     
//      // Event listener onchange
//      qtyInput.addEventListener('change', e => {
         
//          const value = parseInt(e.target.value);
         
//          // Validasi melebihi stok
//          if(value > item.stok) {
//              document.getElementById('berhasilAlert').innerHTML = `Hanya tersisa ${item.stok} stok ${item.nama_barang}` ;
//              document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
//              setTimeout(function() {
//                  document.getElementById('berhasilAlert').classList.remove('opacity-100');
//                 }, 2000);
//                 setTimeout(function() {
//                     document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
//                 }, 2500);
//                 renderCart();
//                 return;
//             }
//             if(value < 1) {
//                 document.getElementById('berhasilAlert').innerHTML = item.nama_barang + ' tidak bisa kurang dari 1';
//                 document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
//                 setTimeout(function() {
//                     document.getElementById('berhasilAlert').classList.remove('opacity-100');
//                 }, 2000);
//                 setTimeout(function() {
//                     document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
//                 }, 2500);
//                 renderCart();
//                 return;
//             }
            
//             // Update quantity 
//             item.qty = value;
            
//             // Update subtotal
//             updateSubTotal(item);
            
            
//         });
        
//         qtyTd = qtyInput;
        
//     } else {
//         qtyTd = document.createElement('td');
//         qtyTd.classList.add('border', 'border-black', 'w-16');
//         qtyTd.innerHTML = item.qty;
//     }
    
//     const hargaTd = document.createElement('td');
//     hargaTd.classList.add('border', 'border-black', 'w-40');
//     hargaTd.innerHTML = 'Rp ' + item.harga.toLocaleString('id-ID');
    
//     const diskonTd = document.createElement('td');
//     diskonTd.classList.add('border', 'border-black', 'w-20');
//     diskonTd.innerHTML = item.diskon + '%';
    
//     const sub_totalTd = document.createElement('td');
//     sub_totalTd.classList.add('border', 'border-black', 'w-40');
//     sub_totalTd.innerHTML = 'Rp ' + item.sub_total.toLocaleString('id-ID');
    
//     let actionTd;
//     if(item.isEditMode) {   
//         actionTd = document.createElement('td');
//         actionTd.classList.add('border', 'border-black');
//         actionTd.innerHTML = `<div class=" flex gap-2 justify-center">
//                              <button data-id="${item.id}" class="bg-[#C16F1D] text-white text-xs w-14 py-1 rounded-md hover:scale-110 duration-300 edit-btn1">Simpan</button>
//                              <button class="bg-red-800 text-white text-xs w-14 py-1 rounded-md hover:scale-110 duration-300" onclick="showModal()">Hapus</button>
//                              </div>
//                              <div id="hapusButton" class="bg-black fixed top-0 left-0 font-poppins opacity-0 hidden transition-opacity h-screen w-screen bg-opacity-50 justify-center items-center">
//                              <div class=" bg-white rounded-md flex flex-col gap-3 justify-center items-center py-4 px-10">
//                                             Apakah anda yakin ingin menghapus?
//                                             <div class="text-white text-sm flex gap-3 ">
//                                                 <button data-id="${item.id}" class=" bg-blue-600 w-20 rounded-md hover:scale-110 duration-300 hapus-btn">Ya</button>
//                                                 <button onclick="hideModal()" class=" bg-red-800 w-20 rounded-md py-1 hover:scale-110 duration-300">Tidak</button>
//                                             </div>
//                                         </div>
//                                     </div>
//                                     </div>`;
//                             }
//                             else{
//                                 actionTd = document.createElement('td');
//                                 actionTd.classList.add('border', 'border-black');
//                                 actionTd.innerHTML = `<div class=" flex gap-2 justify-center">
//                                     <button data-id="${item.id}" class="bg-[#C16F1D] text-white text-xs w-14 py-1 rounded-md hover:scale-110 duration-300 edit-btn">Edit</button>
//                                     <button class="bg-red-800 text-white text-xs w-14 py-1 rounded-md hover:scale-110 duration-300" onclick="showModal()">Hapus</button>
//                                     </div>
//                                     <div id="hapusButton" class="bg-black fixed top-0 left-0 font-poppins opacity-0 hidden transition-opacity h-screen w-screen bg-opacity-50 justify-center items-center">
//                                         <div class=" bg-white rounded-md flex flex-col gap-3 justify-center items-center py-4 px-10">
//                                             Apakah anda yakin ingin menghapus?
//                                             <div class="text-white text-sm flex gap-3 ">
//                                                 <button data-id="${item.id}" class=" bg-blue-600 w-20 rounded-md hover:scale-110 duration-300 hapus-btn">Ya</button>
//                                                 <button onclick="hideModal()" class=" bg-red-800 w-20 rounded-md py-1 hover:scale-110 duration-300">Tidak</button>
//                                                 </div>
//                                                 </div>
//                                                 </div>`;
//                                             }
                                            
//                                             // {{-- ="${item.id} --}}
//                                 // Masukkan elemen-elemen td ke dalam baris
//                                 tr.appendChild(iterationTd);
//                                 tr.appendChild(idTd);
//                                 tr.appendChild(namaTd);
//                                 tr.appendChild(qtyTd);
//                                 tr.appendChild(hargaTd);
//                                 tr.appendChild(diskonTd);
//                                 tr.appendChild(sub_totalTd);
//                                 tr.appendChild(actionTd);
                                
//                                 // Masukkan baris ke dalam cartBody
//      cartBody.appendChild(tr);
     
//      //Memberikan nilai jumlah total harga semua barang juga jumlah sub total semua harga sebelum diberikan pajak 
//      sumSubTotal += item.sub_total;   
//      sumTotal += item.sub_total + (item.sub_total * 0.1);   
//  });
//  document.getElementById('jumlahSubTotal').innerHTML ='Rp ' + sumSubTotal.toLocaleString('id-ID');
//  document.getElementById('jumlahTotal1').innerHTML ='Rp ' + sumTotal.toLocaleString('id-ID');
//  document.getElementById('jumlahTotal2').innerHTML ='Rp ' + sumTotal.toLocaleString('id-ID');
                     
//  for (let i = cart.length; i < 20; i++) {
//    const emptyRow = document.createElement('tr');
//    emptyRow.innerHTML = `
//    <td class="border border-black w-12 h-10"></td>
//    <td class="border border-black w-36"></td>
//    <td class="border border-black w-52"></td>
//    <td class="border border-black w-16"></td>
//    <td class="border border-black w-40"></td>
//    <td class="border border-black w-20"></td>
//    <td class="border border-black w-40"></td>
//    <td class="border border-black"></td>
//    `;
//    cartBody.appendChild(emptyRow);
//  }
// }

// function showModal() {
//    let modal = document.getElementById('hapusButton');
//    modal.classList.remove('hidden');
//    modal.classList.add('flex');
//    setTimeout(() => {
//        modal.classList.add('opacity-100');
//    }, 20);
// }

// function hideModal() {
// let modal = document.getElementById('hapusButton');
// modal.classList.remove('opacity-100');
// setTimeout(() => {
//     modal.classList.remove('flex');
//     modal.classList.add('hidden');
// }, 500);
// }

// // event listeners
// searchInput.addEventListener('select', e => addToCart(e.target));
// cartBody.addEventListener('click', e => {
// if(e.target.classList.contains('hapus-btn')) {
//  const id = e.target.dataset.id;
//  const removedItem = cart.find(item => item.id == id);
//  removeFromCart(id);
 
//  //Memunculkan alert berhasil
//  if (removedItem) {
//      document.getElementById('berhasilAlert').innerHTML = removedItem.nama_barang + ' berhasil di hapus!';
//      document.getElementById('berhasilAlert').classList.add('opacity-100');
//      setTimeout(function () {
//          document.getElementById('berhasilAlert').classList.remove('opacity-100');
//      }, 2000);
//  }
// }
// if(e.target.classList.contains('edit-btn')) {
//  const id = e.target.dataset.id;
//  toggleEdit(id);
// }
// if(e.target.classList.contains('edit-btn1')) {
//  const id = e.target.dataset.id;
//  toggleEdit(id);
 
//  //Memunculkan alert berhasil
//  const item = cart.find(item => item.id == id);
//  document.getElementById('berhasilAlert').innerHTML = item.nama_barang + ' berhasil di edit!';
//  document.getElementById('berhasilAlert').classList.add('opacity-100');
//  setTimeout(function() {
//      document.getElementById('berhasilAlert').classList.remove('opacity-100');
//  }, 2000);
// }
// }); 


// function debounce(func, delay) {
// let timeoutId;
// return function () {
//  const context = this;
//  const args = arguments;
//  clearTimeout(timeoutId);
//  timeoutId = setTimeout(() => {
//      func.apply(context, args);
//  }, delay);
// };
// }

// // Search Barang
// const search = debounce(async keyword => {

// // Hide results
// searchResults.style.display = 'none';

// // Abort if empty
// if(!keyword) return;

// // Call API
// const response = await fetch(`/search-barang?keyword=${keyword}`);
// const data = await response.json();

// // Show & render results
// searchResults.style.display = 'block';
// renderResults(data);

// }, 500);


// function ucwords(str) {
// return str.replace(/\b\w/g, function (match) {
//  return match.toUpperCase();
// });
// }

// // Render results 
// function renderResults(barangs) {

// searchResults.innerHTML = '';

// barangs.forEach((barang, index) => {
 
//  const li = document.createElement('li');
//  li.innerText = ucwords(barang.nama_barang);
 
//  li.classList.add('w-full','py-3', 'pl-4', 'hover:bg-[#D9D9D9]', 'hover:scale-[1.01]', 'duration-300', 'cursor-pointer');
 
//  if(index < barangs.length - 1){
//      li.classList.add('border-b-2', 'border-black');
//  }
//  else{
//      li.classList.add('rounded-b-md');
//  }
 
//  li.addEventListener('click', () => {
//      selectBarang(barang);
//  });
 
//  searchResults.appendChild(li);
 
// });

// }

// // Select barang 
// function selectBarang(barang) {

// // Add to cart  
// addToCart(barang);

// // Reset input
// searchInput.value = '';

// // Hide results
// searchResults.style.display = 'none';

// }

// // Event listener
// searchInput.addEventListener('input', e => {
// search(e.target.value); 
// });

// const SAVE_URL = "/transaksi";

// // Event handler 
// tombolBayar.addEventListener('click', function() {
// if(cart.length < 1){
//  document.getElementById('berhasilAlert').innerHTML = `Anda harus memilih barang dahulu` ;
//  document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
//  setTimeout(function() {
//      document.getElementById('berhasilAlert').classList.remove('opacity-100');
//  }, 2000);
//  setTimeout(function() {
//      document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
//  }, 2500);
// }
// else{
//  document.getElementById('berhasilBayar').classList.remove('hidden');
//  document.getElementById('berhasilBayar').classList.add('flex');
//  setTimeout(() => {
//      document.getElementById('berhasilBayar').classList.add('opacity-100');
     
//  }, 200);
//  setTimeout(() => {
//      document.getElementById('berhasilBayar').classList.remove('opacity-100');
//      setTimeout(() => {
//          document.getElementById('berhasilBayar').classList.remove('flex');
//          document.getElementById('berhasilBayar').classList.add('hidden');
//      }, 500);
     
//  }, 2300);

//  const data = cart.map(item => {
//    return {
//      id_barang: item.id,
//      jumlah_barang: item.qty,
//      sub_total: item.sub_total,
//      harga_total: item.sub_total + (item.sub_total * 0.1),
//      pajak: 0.1
//    };
//  });

//  axios.post('/transaksi', data)
//    .then(response => {
//        setTimeout(() => {
//            location.reload(true);
//        }, 2300);
//    })
//    .catch(error => {
//        // Handle error if the request fails
//        console.error('Error:', error);
//        alert('Terjadi kesalahan saat menyimpan transaksi.');
//    });
// }


// });