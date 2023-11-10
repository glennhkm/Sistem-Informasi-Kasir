@extends('layout')
@section('title','Tabel Barang')
    
@section('body')
    {{-- Start Data Barang dan Tambah Barang --}}
    <div class=" h-[66px] font-poppins mt-[20px] clear-both">
        {{-- Data Barang --}}
        <div class=" inline-block float-left ml-[38px]">
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

        {{-- Start Tambah Barang --}}
        <div class=" float-right mr-[50px] font-semibold text-white mt-[20px]">
            <button id="tampilkanTambahBarang" class=" h-[38px] rounded p-[5px] bg-[#C16F1D] hover:scale-[1.1] duration-[0.4s]">+ Tambah Barang</button>
        </div>
        {{-- End of Tambah Barang --}}
    </div>
    {{-- End of Data Barang dan Tambah Barang --}}

    {{-- Start Tabel Barang --}}
    <div class=" w-[94%] h-[430px] ml-[38px] mt-[30px] font-poppins overflow-scroll">
        <table class=" w-full text-center">
            <thead class="bg-[#C02126]  text-white sticky top-[0px] font-semibold">
                <tr>
                    <td class="border border-black">No</td>
                    <td class="border border-black">Kode Barang</td>
                    <td class="border border-black">Nama Barang</td>
                    <td class="border border-black">Qyt</td>
                    <td class="border border-black">Harga</td>
                    <td class="border border-black">Disc%</td>
                    <td class="border border-black">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
                <tr class="h-[25px]">
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                    <td class="border border-black"></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- End of Tabel Barang  --}}

    {{-- Start Footer --}}
    <div class=" h-[80px] ml-[38px] mt-[28px]">
        <a href="/main">
            <button class=" hover:scale-[1.05] duration-[0.4s]">
                    <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[56px] inline-block">
                    <p class=" inline-block text-[32px] font-bold align-middle">BACK</p>
            </button>
        </a>
    </div>
    {{-- End of Footer --}}

    {{-- Overlay Untuk page Tambah Barang --}}
    <div id="overlayBarang">
        <div id="overlayBarangContent" class=" transition-opacity">

        </div>
    </div>
    {{--End of Overlay  --}}
    <script src="{{asset('src/barang.js')}}"></script>
@endsection