@extends('layout')
@section('title','Tabel Barang')
    
@section('body')
<div class="overflow-hidden h-[88vh] w-screen">
    {{-- Start Data Barang dan Tambah Barang --}}
    <div class="relative h-[8vh] font-poppins mt-[2vh] mx-[2.3vw] flex items-center justify-center">
        {{-- Data Barang --}}
        <div class=" inline-block float-left">
            <p class=" font-bold text-[2.5vh] mb-[1vh]">Data Barang</p>

            <div class=" font-medium inline-block w-[9vw] h-[4vh] border-[0.1vh] border-black rounded-[0.7vh] bg-[#D9D9D9]">
                <p class=" inline-block px-[0.4vw] py-[0.01vw] border-r-[0.1vh] text-[2.5vh] w-[5vw] h-full border-black">show</p>
                <select id="jumlahBarang" onchange="updateJumlahBarang()" class=" bg-[#D9D9D9] focus:outline-none appearance-none box-border py-[0.01vh] px-[0.01vw] text-center text-[2.5vh] w-[3vw] h-[3.5vh] cursor-pointer">
                    <option value="0">All</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>
                </select>
            </div>
        </div>
        {{-- End of Data Barang --}}
        @if (session('success'))
        <div id="successMessage" class=" font-[650] tracking-wide absolute translate-y-[0.6rem] border border-green-600 py-2 px-2 text-green-600 bg-green-600 bg-opacity-25 rounded-md w-1/4 opacity-0 transition-opacity duration-1000 text-center">
            {{ session('success') }}
        </div>
        @endif
        {{-- Start Tambah Barang --}}
        <div class=" ml-auto font-semibold text-[1.8vh] text-white mt-[2vh]">
            <button onclick="showModal('modal-add')" class=" h-[5.5vh] px-[0.8vw] rounded-[0.9vh] bg-[#C16F1D] hover:scale-[1.1] duration-300">+ Tambah Barang</button>
        </div>
        {{-- End of Tambah Barang --}}
    </div>
    {{-- End of Data Barang dan Tambah Barang --}}

    {{-- Start Tabel Barang --}}
    <div class=" w-[95.7%] h-[58vh] mx-auto mt-[5vh] font-poppins overflow-scroll">
        <table class=" w-full text-center">
            <thead class="bg-[#C02126]  text-white sticky top-[0px] font-semibold text-[2vh]">
                <tr class="h-[5vh]">
                    <td class="border-[0.1vh] border-black w-[3.7vw]">No</td>
                    <td class="border-[0.1vh] border-black w-[9vw]">Kode Barang</td>
                    <td class="border-[0.1vh] border-black w-[30vw]">Nama Barang</td>
                    <td class="border-[0.1vh] border-black w-[4vw]">Qyt</td>
                    <td class="border-[0.1vh] border-black w-[15vw]">Harga</td>
                    <td class="border-[0.1vh] border-black w-[8vw]">Disc%</td>
                    <td class="border-[0.1vh] border-black w-[20vw]">Action</td>
                </tr>
            </thead>
            <tbody id="bodyTable" class=" text-[1.9vh]">
                @include('partial')
                
            </tbody>
        </table>
    </div>
    
    {{-- Form untuk menambahkan barang --}}
    <div class="w-screen h-screen fixed top-0 left-0 opacity-0 hidden transition-opacity duration-500 justify-center font-poppins items-center bg-black bg-opacity-30" id="modal-add"> 
        <form action="/barang" method="POST" class=" bg-white relative font-semibold text-2xl py-10 items-center rounded-md w-1/3 flex flex-col gap-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" onclick="hideModal('modal-add')" class=" absolute top-2 right-2 cursor-pointer hover:scale-110 duration-300 w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Tambah Barang
            @csrf
            <div class="text-xs flex flex-col w-4/5 gap-2 mt-2">
                <label for="nama_barang" class="text-sm ml-1">Nama barang</label>
                <input type="text" required autocomplete="off" oninvalid="this.setCustomValidity('Nama barang tidak boleh kosong!')" oninput="this.setCustomValidity('')" name="nama_barang" id="nama_barang" class=" rounded-md bg-[#D9D9D9] font-normal py-3  px-2">
            </div>
            <div class="text-xs flex flex-col w-4/5 gap-2">
                <label for="harga" class="text-sm ml-1">Harga barang</label>
                <input type="number" required autocomplete="off" oninvalid="this.setCustomValidity('Harga tidak boleh kosong!')" oninput="this.setCustomValidity('')"  name="harga" id="harga" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
            </div>
            <div class="text-xs flex flex-col w-4/5 gap-2">
                <label for="harga" class="text-sm ml-1">Stok</label>
                <input type="number" required autocomplete="off" oninvalid="this.setCustomValidity('Stok tidak boleh kosong!')" oninput="this.setCustomValidity('')"  name="stok" id="stok" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
            </div>
            <div class="text-xs flex flex-col w-4/5 gap-2">
                <label for="harga" class="text-sm ml-1">Diskon</label>
                <input type="number" autocomplete="off"  name="diskon" id="diskon" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
            </div>
            <button type="submit" class="bg-[#C16F1D] text-white font-semibold rounded-md w-32 py-2 text-sm px-4 hover:scale-110 duration-300 mt-4">Save</button>
        </form>
    </div>

    {{-- Form untuk mengedit barang --}}
    <div class="w-screen h-screen fixed top-0 left-0 opacity-0 hidden transition-opacity duration-500 justify-center font-poppins items-center bg-black bg-opacity-30" id="edit-modal"> 
        <form id='edit-form' method="POST" class=" bg-white relative font-semibold text-2xl py-10 items-center rounded-md w-1/3 flex flex-col gap-6">
            @csrf
            @method('PUT')
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" onclick="hideModal('edit-modal')" class=" absolute top-2 right-2 cursor-pointer hover:scale-110 duration-300 w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Edit Barang
                <div class="text-xs flex flex-col w-4/5 gap-2 mt-2">
                    <label for="nama_barang" class="text-sm ml-1">Nama barang</label>
                    <input type="text" autocomplete="off" oninvalid="this.setCustomValidity('Nama barang tidak boleh kosong!')" oninput="this.setCustomValidity('')" name="nama_barang" id="nama_barang_edit" class=" rounded-md bg-[#D9D9D9] font-normal py-3  px-2">
                </div>
                <div class="text-xs flex flex-col w-4/5 gap-2">
                    <label for="harga" class="text-sm ml-1">Harga barang</label>
                    <input type="number" autocomplete="off" oninvalid="this.setCustomValidity('Harga tidak boleh kosong!')" oninput="this.setCustomValidity('')"  name="harga" id="harga_edit" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
                </div>
                <div class="text-xs flex flex-col w-4/5 gap-2">
                    <label for="harga" class="text-sm ml-1">Stok</label>
                    <input type="number" autocomplete="off" oninvalid="this.setCustomValidity('Stok tidak boleh kosong!')" oninput="this.setCustomValidity('')"  name="stok" id="stok_edit" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
                </div>
                <div class="text-xs flex flex-col w-4/5 gap-2">
                    <label for="harga" class="text-sm ml-1">Diskon</label>
                    <input type="number" autocomplete="off"  name="diskon" id="diskon_edit" class=" rounded-md bg-[#D9D9D9] font-normal text-xs py-3  px-2">
                </div>
                <button onclick="confirmForm('edit-form')" type="submit" class=" bg-[#C16F1D] text-white font-semibold rounded-md w-32 py-2 text-sm px-4 hover:scale-110 duration-300 mt-4">Save</button>
        </form>
    </div>
    
    {{-- Form validasi tombol delete barang --}}
    <div class="bg-black fixed top-0 left-0 font-poppins opacity-0 hidden transition-opacity h-screen w-screen bg-opacity-50 justify-center items-center" id="delete-modal">
        <div class=" bg-white rounded-md flex flex-col gap-3 justify-center items-center py-4 px-10">
            Apakah anda yakin ingin menghapus?
            <form id="delete-form" class="text-sm flex text-white gap-3" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-blue-600 w-20 text-center py-1 rounded-md hover:scale-110 duration-300" type="button" onclick="confirmForm('delete-form')">Ya</button>
                <span onclick="hideModal('delete-modal')" class="bg-red-800 w-20 hover:scale-110 duration-300 text-center py-1 rounded-md cursor-pointer">Tidak</span>
            </form>
        </div>
    </div>
    
    {{-- End of Tabel Barang  --}}

    {{-- Start Footer --}}
    <div class=" h-[15vh] ml-[4vh] mt-[2.6vh]">
        <a href="/">
            <button class=" hover:scale-[1.05] duration-[0.4s]">
                    <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[3vw] inline-block">
                    <p class=" inline-block text-[5vh] ml-[0.5vh] font-bold align-middle">BACK</p>
            </button>
        </a>
    </div>
    {{-- End of Footer --}}
</div>
    {{-- Overlay Untuk page Tambah Barang --}}
    {{-- <div id="overlayBarang">
        <div id="overlayBarangContent" class=" transition-opacity">

        </div>
    </div>s
    {{--End of Overlay  --}}
    {{-- <script src="{{asset('src/barang.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        let selectedBarangId;


    function updateJumlahBarang() {
        var jumlahBarang = document.getElementById('jumlahBarang').value;
        // Lakukan permintaan AJAX ke server
        $.ajax({
            url: '/update-jumlah-barang',
            method: 'GET',
            data: { jumlahBarang: jumlahBarang },
            success: function(response) {
                // Tangani respons dan perbarui bagian yang sesuai dari halaman
                document.getElementById('bodyTable').innerHTML = response;
            },
            error: function(error) {
                console.error('Gagal mengambil data: ', error);
            }
        });
    }   

    function setSelectedBarangId(id, idModal, nama_barang = 0, stok = 0, harga = 0, diskon = 0) {
        selectedBarangId = id;

        document.getElementById('nama_barang_edit').value = nama_barang;
        document.getElementById('harga_edit').value = harga;
        document.getElementById('stok_edit').value = stok;
        document.getElementById('diskon_edit').value = diskon;
        showModal(idModal);
    }
    
    function confirmForm(idForm) {
            if (selectedBarangId) {
            document.getElementById(idForm).action = "/barang/" + selectedBarangId;
            document.getElementById(idForm).submit();
        }
    }

    function showModal(id) {
        let modal = document.getElementById(id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        setTimeout(() => {
            modal.classList.add('opacity-100');
        }, 20);
    }

    function hideModal(id) {
        let modal = document.getElementById(id);
        modal.classList.remove('opacity-100');
        setTimeout(() => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }, 500);
    }

    // Tampilkan pesan sukses
    // successMessage.classList.remove('hidden');
    // successMessage.classList.add('opacity-100');
    setTimeout(() => {
        var successMessage = document.getElementById('successMessage');
        successMessage.style.opacity = '100';
    }, 100);

    // Setelah 3 detik, sembunyikan pesan sukses dengan efek blur
    setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        successMessage.style.opacity = '0';
        // successMessage.style.filter = 'blur(5px)';

        // Tunggu efek selesai sebelum menyembunyikan elemen
        setTimeout(function() {
            successMessage.classList.add('hidden');
        }, 700); // Sesuaikan dengan durasi transition (300ms)
    }, 2600); // Sesuaikan dengan durasi tampilan pesan (3000ms)

    
    </script>
    
@endsection