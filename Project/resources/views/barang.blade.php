@extends('layout')
@section('title','Tabel Barang')
    
@section('body')
    {{-- Start Data Barang dan Tambah Barang --}}
    <div class="relative h-[66px] font-poppins mt-[20px] mx-12   flex items-center justify-center">
        {{-- Data Barang --}}
        <div class=" inline-block float-left">
            <p class=" font-bold text-[20px] mb-[10px]">Data Barang</p>

            <div class=" font-medium inline-block border border-black rounded bg-[#D9D9D9]">
                <p class=" inline-block px-[8px] border-r-[1px] border-black">show</p>
                <select name="" id="" class=" rounded bg-[#D9D9D9]">
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
        <div class=" ml-auto font-semibold text-sm pl-1 text-white mt-[20px]">
            <button onclick="showModal('modal-add')" class=" h-[38px] px-4 rounded-md bg-[#C16F1D] hover:scale-[1.1] duration-300">+ Tambah Barang</button>
        </div>
        {{-- End of Tambah Barang --}}
    </div>
    {{-- End of Data Barang dan Tambah Barang --}}

    {{-- Start Tabel Barang --}}
    <div class=" w-[94%] h-[430px] mx-auto mt-[30px] font-poppins overflow-scroll">
        <table class=" w-full text-center">
            <thead class="bg-[#C02126]  text-white sticky top-[0px] font-semibold">
                <tr>
                    <td class="border border-black py-2">No</td>
                    <td class="border border-black">Kode Barang</td>
                    <td class="border border-black">Nama Barang</td>
                    <td class="border border-black">Stok</td>
                    <td class="border border-black">Harga</td>
                    <td class="border border-black">Disc%</td>
                    <td class="border border-black">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)   
                <tr class="h-[25px]">
                    <td class="border border-black h-10">{{$loop->iteration}}</td>
                    <td class="border border-black">{{$item->id}}</td>
                    <td class="border border-black">{{ ucwords($item->nama_barang) }}</td>
                    <td class="border border-black">{{$item->stok}}</td>
                    <td class="border border-black">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="border border-black">{{$item->diskon*1}}%</td>
                    <td class="border border-black">
                        <div class="flex justify-center gap-2 text-sm text-white">
                            <button onclick="setSelectedBarangId({{$item->id}}, '{{$item->nama_barang}}', {{$item->stok}}, {{$item->harga}}, '{{$item->diskon}}', 'edit-modal')" class="rounded-md bg-[#C16F1D] hover:scale-110 duration-300 w-16 py-1">
                                Edit 
                            </button>
                            <button onclick="setSelectedBarangId({{$item->id}}, '{{$item->nama_barang}}', {{$item->stok}}, {{$item->harga}}, '{{$item->diskon}}', 'delete-modal')" type="submit" class="w-16 rounded-md bg-red-800 hover:scale-110 duration-300">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @for($i = count($barang); $i < 20; $i++)
                <tr class="h-[25px]">
                    <td class="border border-black h-10"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                @endfor
                
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
    <div class="w-screen h-screen fixed top-0 left-0 opacity-0 hidden transition-opacity duration-500 justify-center font-poppins items-center bg-black bg-opacity-30" id="delete-modal"> 
        <div class="bg-white rounded-md w-auto px-8 py-5 h-auto flex flex-col gap-4 items-center justify-center">
            Apakah anda yakin ingin menghapus?
            <form id="delete-form" class="text-sm flex text-white gap-2" method="POST">
                @csrf
                @method('DELETE')
                <span onclick="hideModal('delete-modal')" class="bg-red-800 w-16 hover:scale-110 duration-300 text-center py-1 rounded-md cursor-pointer">Tidak</span>
                <button class="bg-blue-600 w-16 text-center py-1 rounded-md hover:scale-110 duration-300" type="button" onclick="confirmForm('delete-form')">Ya</button>
            </form>
        </div>
    </div>
    
    {{-- End of Tabel Barang  --}}

    {{-- Start Footer --}}
    <div class=" h-[80px] ml-[38px] mt-[28px]">
        <a href="/">
            <button class=" hover:scale-[1.05] duration-[0.4s]">
                    <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[56px] inline-block">
                    <p class=" inline-block text-[32px] font-bold align-middle">BACK</p>
            </button>
        </a>
    </div>
    {{-- End of Footer --}}

    {{-- Overlay Untuk page Tambah Barang --}}
    {{-- <div id="overlayBarang">
        <div id="overlayBarangContent" class=" transition-opacity">

        </div>
    </div>
    {{--End of Overlay  --}}
    {{-- <script src="{{asset('src/barang.js')}}"></script> --}}
    <script>
        let selectedBarangId;

    function setSelectedBarangId(id, nama_barang, stok, harga, diskon, idModal) {
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