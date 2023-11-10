@extends('layout')
@section('title','Main Page')

@section('body')
    <div class="h-full container">
        {{-- Start Cari Barang dan Total --}}
        <div class=" h-[9em] border-[1px] border-[#000000] font-poppins box-border w-screen clear-both">
            {{-- Start Cari Barang --}}
            <div class=" box-border pt-[0.8em] pl-[2.5em] w-[47%] border-r-[1px] border-[#000000] h-[8.9em] float-left">
                <label for="cariBarang" class="block font-bold text-[1.5em]">CARI BARANG</label>
                <input type="text" id="cariBarang" onkeydown="handleKeyPress(event)" class="text-[1.18em] border-[1px] border-[#000000] bg-[#D9D9D9] mt-[0.31em] h-[3.2em] w-[75%] rounded px-[10px]">

                
                <div class=" float-right box-border mr-[5.625em] mt-[0.7em]">
                    <button onclick="tambahBarang()" class=" hover:scale-[1.15] duration-[0.4s]">
                        <svg width="60" height="58" viewBox="0 0 50 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="40" height="38" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_3_33" transform="matrix(0.00195312 0 0 0.00206473 0 -0.0285714)"/>
                            </pattern>
                            <image id="image0_3_33" width="512" height="512" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>                
                    </button>
                </div>
            </div>
            {{-- End of Cari Barang --}}

            {{-- Start Total --}}
            <div class=" float-right w-[50%] h-[8.9em] mr-[1.875em] ">
                <p class=" text-[1.8em] font-bold text-[#C02126] mt-[0.5em]">Total</p>
                <p id="tot" class=" text-[3em] font-bold text-center mt-[-0.4em]">Rp.0,00</p>
            </div>
            {{-- End of Total --}}

        </div>
        {{-- End of Cari barang dan Total--}}
        
        {{-- Start Tabel dan Side Bar --}}
        <div class="h-[30em] w-screen clear-both font-poppins">

            {{-- Start Tabel --}}
            <div class="w-[72%]  h-full mt-[1.68em] float-left ml-[2.375em] overflow-scroll">
                <table cellpadding="0" cellspacing="0" class=" w-full text-center text-[1.25em] ">    
                    <thead class="bg-[#C02126] text-white sticky top-[0px] font-semibold">
                        <tr class="h-[2.8em]">
                            <td class="border border-black">No</td>
                            <td class="border border-black">Kode Barang</td>
                            <td class="border border-black">Nama Barang</td>
                            <td class="border border-black">Qyt</td>
                            <td class="border border-black">Harga</td>
                            <td class="border border-black">Disc%</td>
                            <td class="border border-black">Subtotal</td>
                            <td class="border border-black">Edit</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < 20 ; $i++)
                        <tr class="h-[2em]">
                            <td class="border border-black" id="td1"></td>
                            <td class="border border-black" id="td2"></td>
                            <td class="border border-black" id="td3"></td>
                            <td class="border border-black" id="td4"></td>
                            <td class="border border-black" id="td5"></td>
                            <td class="border border-black" id="td6"></td>
                            <td class="border border-black" id="td7"></td>
                            <td class="border border-black"></td>
                        </tr>
                        @endfor 
                    </tbody>
                </table>
            </div>
            {{-- End of Tabel --}}

            {{-- Start Side Bar --}}
            <div class=" float-right w-[25%] mt-[17.5%] pl-[3%]">

                <a href="/barang">
                    <button class="ubah-warna block w-[23em] border border-[#272320] rounded mb-[2em] h-[4.125em] hover:scale-[1.05] active:scale-[1] hover:bg-[#C02126] hover:text-white duration-[0.4s] ">
                            <img src="{{ url('assets/img/barang.png')}}" alt="barang" class="gambar w-[2.5em] inline-block">
                            <p class=" inline-block text-[1.5em]">Barang</p>
                    </button>
                </a>

                <a href="/transaksi">
                    <button class="ubah-warna block w-[23em] border border-[#272320] rounded h-[4.125em] hover:scale-[1.05] active:scale-[1] hover:bg-[#C02126] hover:text-white  duration-[0.4s]">
                            <img src="{{ url('assets/img/money.png') }}" alt="" class="gambar w-[2.5em] inline-block ">
                            <p class=" inline-block text-[1.5em]">Transaksi</p>
                    </button>
                </a>
            </div>
            {{-- End of Side Bar --}}
        </div>
        {{-- End of Tabel dan Side Bar --}}

        {{-- Start footer --}}
        <div class=" font-poppins clear-both text-right w-screen mt-[3.2%]">
            <div class="inline-block h-[6.25em] float-left ml-[2.375em] mt-[1.25em]">
                <button class=" hover:scale-[1.05] active:scale-[1] duration-[0.4s]">
                    <a href="/">
                        <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[3.5em] inline-block">
                        <p class=" inline-block text-[2em] font-bold align-middle">LOGOUT</p>
                    </a>
                </button>
            </div>

            <div class="border-[2px] border-[#000000] inline-block w-[45em] h-[7.3em] clear-both text-center box-border rounded mr-[4%]">
                <div class=" inline-block text-[2em] font-medium float-left w-[45%] h-[80px] border-r-[3px] border-[#272320] mt-[0.55em]">
                    <p class=" leading-[80px]">Pajak : <span>%</span></p>
                </div>

                <div class=" inline-block font-bold text-[1.25em] float-right w-[52%] h-[6.25em]">
                    <div class="mb-[0.625em] mt-[0.8em] clear-left">
                        <p class=" float-left">Subtotal : </p> <span>Rp.0,00</span>
                    </div>
                    <div class=" text-[#C02126] clear-left">
                        <p  class=" float-left ml-[1.77em]">Total : </p> <span id="tot1">Rp.0,00</span>
                    </div>
                </div>
            </div>

            <div class="inline-block w-[23em] h-[6.9em] float-right rounded mr-[2.7%] ">
                <button id="bayar1" class="border border-black  text-center w-[100%] h-[100%] bg-[#C02126] text-white font-bold text-[2em] hover:scale-[1.05] active:scale-[1] duration-[0.4s] rounded-lg">BAYAR</button>
            </div>
        </div>
        {{-- End of Footer --}}
    </div>
    

    <script src="{{asset('src/index.js')}}"></script>
@endsection