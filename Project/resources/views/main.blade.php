@extends('layout')
@section('title','Kasir')

@section('body')
<div class="h-[88vh] w-screen box-border">
    {{-- Start Cari Barang dan Total --}}
    <div class=" h-[15.4vh] border-y-[0.1vh] border-[#000000] font-poppins box-border w-full clear-both">
        {{-- Start Cari Barang --}}
        <div class=" relative box-border pt-[1.2vh] pl-[2.1vw] w-[47%] border-r-[0.1vh] border-[#000000] h-[15.3vh] float-left">
            <label for="cariBarang" class="block font-bold text-[2.5vh]">CARI BARANG</label>
            <input type="text" id="searchInput" class="text-[2vh] border-[0.1vh] border-[#000000] bg-[#D9D9D9] mt-[0.5vh] h-[6vh] w-[75%] rounded-[1.2vh] px-[1.3vh] outline-[1vh]">
            <ul  id="searchResults" class="text-[1.7vh] -mt-5 bg-white pt-[1.35rem] shadow-zinc-700 shadow-md rounded-b-md w-[75%] ">
                <!-- result items -->
            </ul>
            
            <div class=" float-right box-border mr-[5vw] mt-[0.9vh]">
                <button onclick="tambahBarang()" class=" hover:scale-[1.15] duration-[0.4s]">
                    <img src="{{url('assets/img/plus.png')}}" alt="" class=" w-[2.5vw]">            
                </button>
            </div>
        </div>
        {{-- End of Cari Barang --}}
        
        {{-- Start Total --}}
        <div class=" float-right w-[50%] h-[15.3vh] mr-[1.4vw] ">
            <p class=" text-[2.8vh] font-bold text-[#C02126] mt-[1.2vh]">Total</p>
            <p id="jumlahTotal1" class=" text-[5.2vh] font-bold text-center mt-[-1.2vh]">Rp 0</p>
        </div>
        {{-- End of Total --}}
        
    </div>
    {{-- End of Cari barang dan Total--}}
    
    {{-- Start Tabel dan Side Bar --}}
    <div class="h-[50vh] w-screen clear-both font-poppins">
        
        {{-- Start Tabel --}}
        <div class="w-[72%]  h-full mt-[3.4vh] float-left ml-[2.1vw] overflow-scroll">
            <table cellpadding="0" cellspacing="0" id="cartTable" class="w-full text-center text-[1.8vh]">    
                <thead class="bg-[#C02126] text-white font-semibold sticky top-0">
                    <tr class="h-[5vh]">
                        <td class="border-[0.1vh] border-black w-[3.3vw]">No</td>
                        <td class="border-[0.1vh] border-black w-[7vw]">Kode Barang</td>
                        <td class="border-[0.1vh] border-black w-[14vw]">Nama Barang</td>
                        <td class="border-[0.1vh] border-black w-[4vw]">Qty</td>
                        <td class="border-[0.1vh] border-black w-[10vw]">Harga</td>
                        <td class="border-[0.1vh] border-black w-[5vw]">Disc%</td>
                        <td class="border-[0.1vh] border-black w-[10vw]">Subtotal</td>
                        <td class="border-[0.1vh] border-black w-[12vw]">Action</td>
                    </tr>
                </thead>
                <tbody id="cartBody">
                    @for($i = 0; $i < 20 ; $i++)
                    <tr class="h-[5vh]">
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                        <td class="border-[0.1vh] border-black"></td>
                    </tr>
                    @endfor 
                </tbody>
            </table>
        </div>
        {{-- End of Tabel --}}
        
        {{-- Start Side Bar --}}
        <div id="berhasilAlert" class=" float-right w-[19.2vw] h-[6vh] mt-[6.45vh] mr-[3%] bg-green-600 bg-opacity-25 opacity-0 text-[1.8vh] border-[0.3vh] transition-opacity duration-700 border-green-600 text-green-600 font-bold rounded-[1vh] text-center leading-[5.6vh]">
            {{-- Berhasil di Edit ! --}} 
        </div>
        <div class="float-right w-[19.3vw] mt-[24vh] mr-[2.7vw]">
            
            <a href="/barang">
                <button class="ubah-warna block w-[19.2vw] border-[0.2vh] border-[#272320] rounded-[1.1vh] mb-[3.1vh] h-[7.1vh] hover:scale-[1.05] active:scale-[1] hover:bg-[#C02126] hover:text-white duration-[0.4s] ">
                    <img src="{{ url('assets/img/barang.png')}}" alt="barang" class="gambar w-[2.1vw] inline-block">
                    <p class=" inline-block text-[2.6vh]">Barang</p>
                </button>
            </a>
            
            <a href="/transaksi">
                <button class="ubah-warna block w-[19.2vw] border-[0.2vh] border-[#272320] rounded-[1.1vh] h-[7.1vh] hover:scale-[1.05] active:scale-[1] hover:bg-[#C02126] hover:text-white  duration-[0.4s]">
                    <img src="{{ url('assets/img/money.png') }}" alt="" class="gambar w-[2.1vw] inline-block ">
                    <p class=" inline-block text-[2.6vh]">Transaksi</p>
                </button>
            </a>
        </div>
        {{-- End of Side Bar --}}
        </div>
        {{-- End of Tabel dan Side Bar --}}
        
        {{-- Start footer --}}
        <div class=" font-poppins clear-both text-right w-screen mt-[3.2%] h-[12.5vh] box-border ">
            <div class="inline-block h-[7vh] float-left ml-[2.1vw] mt-[2vh]">
                <button class=" hover:scale-[1.05] active:scale-[1] duration-[0.4s]">
                    <a href="/logout">
                        <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[4vw] inline-block">
                        <p class=" inline-block text-[4vh] ml-[0.2vw] font-bold align-middle">LOGOUT</p>
                    </a>
                </button>
            </div>
            
            <div class="border-[0.2vh] border-[#000000] inline-block w-[40vw] h-[12.5vh] clear-both text-center box-border rounded-[1.5vh] mr-[4%]">
                <div class=" inline-block text-[3vh] font-medium float-left w-[45%] h-[8.5vh] border-r-[0.4vh] border-[#272320] mt-[1.6vh]">
                    <p class=" leading-[9vh]">Pajak : <span>10%</span></p>
                </div>
                
                <div class=" inline-block font-bold text-[2.2vh] float-right w-[52%] h-[12.4vh]">
                    <div class="mb-[1.2vh] mt-[2vh] clear-left">
                        <p class=" float-left">Subtotal : </p> <span id="jumlahSubTotal">Rp 0</span>
                    </div>
                    <div class=" text-[#C02126] clear-left">
                        <p class=" float-left ml-[2.24vw]">Total : </p> <span id="jumlahTotal2">Rp 0</span>
                    </div>
                </div>
            </div>
            
            <div class="inline-block w-[19.2vw] h-[12.4vh] float-right rounded mr-[2.7%] ">
                <button id="bayar" class="border-[0.1vh] border-black  text-center w-[100%] h-[100%] bg-[#C02126] text-white font-bold text-[2vw] hover:scale-[1.05] active:scale-[1] duration-[0.4s] rounded-[2vh]">BAYAR</button>
            </div>
        </div>
        {{-- End of Footer --}}
    </div>
    
    <div id="berhasilBayar" class="bg-black bg-opacity-30 opacity-0 transition-opacity duration-400 hidden fixed top-0 left-0 w-screen h-screen items-center justify-center font-poppins">
        <div class="w-auto h-auto bg-white rounded-md flex flex-col gap-7 p-12 ">
            <svg xmlns="http://www.w3.org/2000/svg" height="7em" class="" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" fill="rgb(22, 163, 74)"/></svg>
            <p class="text-center font-bold tracking-wide text-xl text-green-600">Pembayaran berhasil!</p>
        </div>
    </div>

    @if(session('status'))
    <div class="bg-black bg-opacity-30 fixed top-0 left-0 hidden duration-300 opacity-0 h-screen w-screen justify-center font-poppins" id="udahLoginModal">
        <div class="text-black font-bold tracking-wide text-2xl bg-white h-32 px-16 gap-3 rounded-md transition-transform duration-700 ease-out transform flex flex-col items-center justify-center" id="udahLoginForm">
            {{ session('status') }}
            <button id="okeUdahLogin" onclick="hideModal('udahLoginModal')" class="bg-green-500 text-white font-normal text-base py-1 rounded-md mx-auto tracking-wider w-20 hover:scale-110 duration-300">
                OK
            </button>
        </div>
    </div>
    @endif
    
    <script>
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        const cartTable = document.getElementById('cartTable');
        const cartBody = document.getElementById('cartBody');
        const tombolBayar = document.getElementById('bayar');
        
        searchResults.classList.add('hidden');
        
        // Cart
        let cart = [];
        let counter = 0;
        let qty = 1;
        // let idHapus;
        
        function addToCart(barang) {
            
            const item = cart.find(i => i.id == barang.id);
            
            if(item) {
                let qtyAwal = item.qty;
                item.qty++;
                item.sub_total = (item.sub_total / qtyAwal) * item.qty
            } else {
                counter++;
    cart.push({
     iteration: counter,  
     id: barang.id,
     nama_barang: ucwords(barang.nama_barang),
     qty: qty,
     harga: barang.harga,
     diskon: barang.diskon*1,
     sub_total: barang.harga - (barang.harga*(barang.diskon/100)) * qty,
     stok: barang.stok,
     isEditMode: false
    });
}

renderCart();

}

function removeFromCart(id) {

cart = cart.filter(item => item.id != id);

renderCart();

}
function updateSubTotal(item) {
item.sub_total = item.qty * (item.harga-(item.harga*(item.diskon/100)));

renderCart();
}

function toggleEdit(itemId) {
const item = cart.find(item => item.id == itemId);

item.isEditMode = !item.isEditMode;

renderCart();
}

function renderCart() {
// Pastikan elemen cartBody telah didefinisikan
const cartBody = document.getElementById('cartBody');

// Kosongkan isi cartBody
cartBody.innerHTML = '';


let sumSubTotal = 0;
let sumTotal = 0;
// Loop melalui setiap item di keranjang
cart.forEach((item, index) => {
 
 // Buat elemen baris baru
 const tr = document.createElement('tr');
 tr.classList.add('h-[5vh]')
 // Buat elemen-elemen td di dalam baris
 const iterationTd = document.createElement('td');
 iterationTd.classList.add('border-[0.1vh]', 'border-black', 'w-[3.3vw]');
 iterationTd.innerHTML = item.iteration;
 
 const idTd = document.createElement('td');
 idTd.classList.add('border-[0.1vh]', 'border-black', 'w-[7vw]');
 idTd.innerHTML = item.id;
 
 const namaTd = document.createElement('td');
 namaTd.classList.add('border-[0.1vh]', 'border-black', 'w-[14vw]');
 namaTd.innerHTML = ucwords(item.nama_barang);
 
 let qtyTd;
 if(item.isEditMode) {  
     // Jika edit mode, buat input quantity
     const qtyInput = document.createElement('input');
     qtyInput.type = 'number';
     qtyInput.classList.add('w-[3.8vw]', 'border-none', 'text-center', 'h-[4.9vh]', 'focus:outline-none');
     qtyInput.value = item.qty;
     
     // Event listener onchange
     qtyInput.addEventListener('change', e => {
         
         const value = parseInt(e.target.value);
         
         // Validasi melebihi stok
         if(value > item.stok) {
             document.getElementById('berhasilAlert').innerHTML = `Stok barang ini hanya tersisa ${item.stok}` ;
             document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
             setTimeout(function() {
                 document.getElementById('berhasilAlert').classList.remove('opacity-100');
                }, 2000);
                setTimeout(function() {
                    document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
                }, 2500);
                renderCart();
                return;
            }
            if(value < 1) {
                document.getElementById('berhasilAlert').innerHTML = 'Barang tidak bisa kurang dari 1';
                document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
                setTimeout(function() {
                    document.getElementById('berhasilAlert').classList.remove('opacity-100');
                }, 2000);
                setTimeout(function() {
                    document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
                }, 2500);
                renderCart();
                return;
            }
            
            // Update quantity 
            item.qty = value;
            
            // Update subtotal
            updateSubTotal(item);
            
            
        });
        
        qtyTd = qtyInput;
        
    } else {
        qtyTd = document.createElement('td');
        qtyTd.classList.add('border-[0.1vh]', 'border-black', 'w-[4vw]');
        qtyTd.innerHTML = item.qty;
    }
    
    const hargaTd = document.createElement('td');
    hargaTd.classList.add('border-[0.1vh]', 'border-black', 'w-[10vw]');
    hargaTd.innerHTML = 'Rp ' + item.harga.toLocaleString('id-ID');
    
    const diskonTd = document.createElement('td');
    diskonTd.classList.add('border-[0.1vh]', 'border-black', 'w-[5vw]');
    diskonTd.innerHTML = item.diskon + '%';
    
    const sub_totalTd = document.createElement('td');
    sub_totalTd.classList.add('border-[0.1vh]', 'border-black', 'w-[10vw]');
    sub_totalTd.innerHTML = 'Rp ' + item.sub_total.toLocaleString('id-ID');
    
    let actionTd;
    if(item.isEditMode) {   
        actionTd = document.createElement('td');
        actionTd.classList.add('border-[0.1vh]', 'border-black');
        actionTd.innerHTML = `  <div class=" flex gap-[0.7vw] justify-center text-[1.5vh]">
                                                            <button data-id="${item.id}" class="bg-[#C16F1D] text-white w-[4vw] h-[3.1vh] py-auto rounded-[0.7vh] hover:scale-110 duration-300 edit-btn1">Simpan</button>
                                                            <button onclick="selectedId(${item.id})" class=" bg-red-800 text-white w-[4vw] h-[3.1vh] py-auto rounded-[0.7vh] hover:scale-110 duration-300">Hapus</button>
                                                        </div>
                                                        <div id="hapusButton" class="bg-black fixed top-0 left-0 font-poppins opacity-0 hidden transition-opacity h-screen w-screen bg-opacity-50 justify-center items-center">
                                                            <div class=" bg-white rounded-md flex flex-col gap-3 justify-center items-center py-4 px-10">
                                                                Apakah anda yakin ingin menghapus?
                                                                <div class="text-white text-sm flex gap-3 ">
                                                                    <button id="tombolYa" class=" bg-blue-600 w-20 rounded-md hover:scale-110 duration-300 hapus-btn">Ya</button>
                                                                    <button onclick="hideModal('hapusButton')" class=" bg-red-800 w-20 rounded-md py-1 hover:scale-110 duration-300">Tidak</button>
                                                                </div>
                                                            </div>
                                                        </div>`;
                            }
                            else{
                                actionTd = document.createElement('td');
                                actionTd.classList.add('border-[0.1vh]', 'border-black');
                                actionTd.innerHTML = `  <div class=" flex gap-[0.7vw] justify-center text-[1.5vh]">
                                                            <button data-id="${item.id}" class="bg-[#C16F1D] text-white w-[4vw] h-[3.1vh] py-auto rounded-[0.7vh] hover:scale-110 duration-300 edit-btn">Edit</button>
                                                            <button onclick="selectedId(${item.id})" class=" bg-red-800 text-white w-[4vw] h-[3.1vh] py-auto rounded-[0.7vh] hover:scale-110 duration-300">Hapus</button>
                                                        </div>
                                                        <div id="hapusButton" class="bg-black fixed top-0 left-0 font-poppins opacity-0 hidden transition-opacity h-screen w-screen bg-opacity-50 justify-center items-center">
                                                            <div class=" bg-white rounded-md flex flex-col gap-3 justify-center items-center py-4 px-10">
                                                                Apakah anda yakin ingin menghapus?
                                                                <div class="text-white text-sm flex gap-3 ">
                                                                    <button id="tombolYa" class=" bg-blue-600 w-20 rounded-md hover:scale-110 duration-300 hapus-btn">Ya</button>
                                                                    <button onclick="hideModal('hapusButton')" class=" bg-red-800 w-20 rounded-md py-1 hover:scale-110 duration-300">Tidak</button>
                                                                </div>
                                                            </div>
                                                        </div>`;
                                            }
                                            
                                            // {{-- ="${item.id} --}}
                                // Masukkan elemen-elemen td ke dalam baris
    tr.appendChild(iterationTd);
    tr.appendChild(idTd);
    tr.appendChild(namaTd);
    tr.appendChild(qtyTd);
    tr.appendChild(hargaTd);
    tr.appendChild(diskonTd);
    tr.appendChild(sub_totalTd);
    tr.appendChild(actionTd);
                                
                                // Masukkan baris ke dalam cartBody
    cartBody.appendChild(tr);
     
     //Memberikan nilai jumlah total harga semua barang juga jumlah sub total semua harga sebelum diberikan pajak 
     sumSubTotal += item.sub_total;   
     sumTotal += item.sub_total + (item.sub_total * 0.1);   
 });
 document.getElementById('jumlahSubTotal').innerHTML ='Rp ' + sumSubTotal.toLocaleString('id-ID');
 document.getElementById('jumlahTotal1').innerHTML ='Rp ' + sumTotal.toLocaleString('id-ID');
 document.getElementById('jumlahTotal2').innerHTML ='Rp ' + sumTotal.toLocaleString('id-ID');
                     
 for (let i = cart.length; i < 20; i++) {
   const emptyRow = document.createElement('tr');
    emptyRow.classList.add('h-[5vh]')
   emptyRow.innerHTML = `
   <td class="border-[0.1vh] border-black w-[3.3vw]"></td>
   <td class="border-[0.1vh] border-black w-[7vw]"></td>
   <td class="border-[0.1vh] border-black w-[14vw]"></td>
   <td class="border-[0.1vh] border-black w-[4vw]"></td>
   <td class="border-[0.1vh] border-black w-[10vw]"></td>
   <td class="border-[0.1vh] border-black w-[5vw]"></td>
   <td class="border-[0.1vh] border-black w-[10vw]"></td>
   <td class="border-[0.1vh] border-black w-[12vw]"></td>
   `;
   cartBody.appendChild(emptyRow);
 }
}
function selectedId(id){
    idHapus = id;
    showModal(idHapus);
}

function showModal(id) {
   let modal = document.getElementById('hapusButton');
   let tombolYa = document.getElementById('tombolYa');

   tombolYa.setAttribute('data-id', id);
   modal.classList.remove('hidden');
   modal.classList.add('flex');
   setTimeout(() => {
       modal.classList.add('opacity-100');
    }, 20);
}

function hideModal(idButton) {
    let modal = document.getElementById(idButton);
    modal.classList.remove('opacity-100');
    if(idButton == 'udahLoginModal'){
        document.getElementById('udahLoginForm').classList.add('ease-in-out');
        document.getElementById('udahLoginForm').classList.remove('translate-y-20');
    }
    setTimeout(() => {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
}, 500);
}


// event listeners
searchInput.addEventListener('select', e => addToCart(e.target));
cartBody.addEventListener('click', e => {
if(e.target.classList.contains('hapus-btn')) {
 const id = e.target.dataset.id;
 const removedItem = cart.find(item => item.id == id);
 removeFromCart(id);
 
 //Memunculkan alert berhasil
 if (removedItem) {
     document.getElementById('berhasilAlert').innerHTML = 'Barang berhasil di hapus!';
     document.getElementById('berhasilAlert').classList.add('opacity-100');
     setTimeout(function () {
         document.getElementById('berhasilAlert').classList.remove('opacity-100');
     }, 2000);
 }
}
if(e.target.classList.contains('edit-btn')) {
 const id = e.target.dataset.id;
 toggleEdit(id);
}
if(e.target.classList.contains('edit-btn1')) {
 const id = e.target.dataset.id;
 toggleEdit(id);
 
 //Memunculkan alert berhasil
 const item = cart.find(item => item.id == id);
 document.getElementById('berhasilAlert').innerHTML = 'Barang berhasil di edit!';
 document.getElementById('berhasilAlert').classList.add('opacity-100');
 setTimeout(function() {
     document.getElementById('berhasilAlert').classList.remove('opacity-100');
 }, 2000);
}
}); 


function debounce(func, delay) {
let timeoutId;
return function () {
 const context = this;
 const args = arguments;
 clearTimeout(timeoutId);
 timeoutId = setTimeout(() => {
     func.apply(context, args);
 }, delay);
};
}

// Search Barang
const search = debounce(async keyword => {

// Hide results
searchResults.style.display = 'none';

// Abort if empty
if(!keyword) return;

// Call API
const response = await fetch(`/search-barang?keyword=${keyword}`);
const data = await response.json();

// Show & render results
searchResults.style.display = 'block';
renderResults(data);

}, 500);


function ucwords(str) {
return str.replace(/\b\w/g, function (match) {
 return match.toUpperCase();
});
}

// Render results 
function renderResults(barangs) {

searchResults.innerHTML = '';

barangs.forEach((barang, index) => {
 
    const li = document.createElement('li');
    li.innerText = ucwords(barang.nama_barang);
    
    li.classList.add('w-full','py-3', 'pl-4', 'hover:bg-[#D9D9D9]', 'hover:scale-[1.01]', 'duration-300', 'cursor-pointer', 'relative', 'z-[1000]', 'bg-white');
    
    if(index < barangs.length - 1){
        li.classList.add('border-b-2', 'border-black');
    }
    else{
        li.classList.add('rounded-b-md');
    }

    li.addEventListener('click', () => {
        selectBarang(barang);
    });

    searchResults.appendChild(li);
 
});

}

// Select barang 
function selectBarang(barang) {

// Add to cart  
addToCart(barang);

// Reset input
searchInput.value = '';

// Hide results
searchResults.style.display = 'none';

}

// Event listener
searchInput.addEventListener('input', e => {
search(e.target.value); 
});

const SAVE_URL = "/transaksi";

// Event handler 
tombolBayar.addEventListener('click', function() {
if(cart.length < 1){
 document.getElementById('berhasilAlert').innerHTML = `Pilih barang terlebih dahulu` ;
 document.getElementById('berhasilAlert').classList.add('opacity-100', 'bg-red-600', 'border-red-600', 'text-red-600');
 setTimeout(function() {
     document.getElementById('berhasilAlert').classList.remove('opacity-100');
 }, 2000);
 setTimeout(function() {
     document.getElementById('berhasilAlert').classList.remove('border-red-600', 'text-red-600', 'bg-red-600');
 }, 2500);
}
else{
 document.getElementById('berhasilBayar').classList.remove('hidden');
 document.getElementById('berhasilBayar').classList.add('flex');
 setTimeout(() => {
     document.getElementById('berhasilBayar').classList.add('opacity-100');
     
 }, 200);
 setTimeout(() => {
     document.getElementById('berhasilBayar').classList.remove('opacity-100');
     setTimeout(() => {
         document.getElementById('berhasilBayar').classList.remove('flex');
         document.getElementById('berhasilBayar').classList.add('hidden');
     }, 500);
     
 }, 2300);

 const data = cart.map(item => {
   return {
     id_barang: item.id,
     nama_barang: item.nama_barang,
     jumlah_barang: item.qty,
     sub_total: item.sub_total,
     harga_total: item.sub_total + (item.sub_total * 0.1),
     pajak: 0.1
   };
 });

 axios.post('/transaksi', data)
   .then(response => {
       setTimeout(() => {
           location.reload(true);
       }, 2300);
   })
   .catch(error => {
       // Handle error if the request fails
       console.error('Error:', error);
       alert('Terjadi kesalahan saat menyimpan transaksi.');
   });
}


});

document.getElementById('udahLoginModal').classList.remove('hidden');
document.getElementById('udahLoginModal').classList.add('flex');
setTimeout(function () {
    document.getElementById('udahLoginForm').classList.add('translate-y-20');
    document.getElementById('udahLoginModal').classList.add('opacity-100');
     }, 50);
    </script>
@endsection