@extends('layout')
@section('title','Transaksi')
    
@section('body')

    {{-- Start Dropdown Data dan Waktu --}}
    <div class=" h-[66px] font-poppins mt-[20px] clear-both">
        {{-- Start Data --}}
        <div class=" inline-block float-left ml-[38px]">
            <p class=" font-bold text-[20px] mb-[10px]">Data Transaksi</p>

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
        {{-- End Data --}}

        {{-- Start Waktu --}}
        <div class=" float-right mr-[50px]">
            <p class="font-bold text-[17px] mb-[15px]">Urutkan Berdasarkan</p>

            <select name="" id="" class=" font-medium rounded border border-black">
                <option value="kemarin">kemarin</option>
                <option value="3-hari-lalu">3 hari lalu</option>
                <option value="7-hari-lalu">7 hari lalu</option>
                <option value="1-bulan-lalu">1 bulan lalu</option>
                <option value="3-bulan-lalu">3 bulan lalu</option>
                <option value="1-tahun-lalu">1 tahun lalu</option>
            </select>
        </div>
        {{-- End Waktu --}}
    </div>
    {{-- End of Data dan Waktu --}}

    {{-- Start Tabel Transaksi --}}
    <div class=" w-[94%] h-[430px] ml-[38px] mt-[30px] font-poppins overflow-scroll">
        <table class=" w-full text-center">
            <thead class="bg-[#C02126]  text-white sticky top-[0px] font-semibold">
                <tr>
                    <td class="border border-black">ID Transaksi</td>
                    <td class="border border-black">ID Pegawai
                    <td class="border border-black">ID Barang</td>
                    <td class="border border-black">Nama Barang</td>
                    <td class="border border-black">Qyt</td>
                    <td class="border border-black"><h1>Harga</h1><p class=" text-[10px]">(harga-(harga * dics))+(harga diskon * pajak)</p></td>
                    <td class="border border-black">Tanggal</td>
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
    {{-- End of Tabel Transaksi  --}}

    {{-- Start footer --}}
    <div class=" h-[80px] ml-[38px] mt-[24px]">
        <a href="/main">
            <button class=" hover:scale-[1.05] duration-[0.4s]">
                    <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[56px] inline-block">
                    <p class=" inline-block text-[32px] font-bold align-middle">BACK</p>
            </button>
        </a>
    </div>
    {{-- End of Footer --}}
@endsection