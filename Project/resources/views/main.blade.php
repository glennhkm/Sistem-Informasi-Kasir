@extends('layout')
@section('title','Main Page')

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
                <table cellpadding="0" cellspacing="0" id="cartTable" class=" w-full text-center text-[2vh] ">    
                    <thead class="bg-[#C02126] text-white top-[0px] font-semibold">
                        <tr class="h-[4vh]">
                            <td class="border border-black py-[0.35rem]">No</td>
                            <td class="border border-black">Kode Barang</td>
                            <td class="border border-black">Nama Barang</td>
                            <td class="border border-black">Qty</td>
                            <td class="border border-black">Harga</td>
                            <td class="border border-black">Disc%</td>
                            <td class="border border-black">Subtotal</td>
                            <td class="border border-black">Action</td>
                        </tr>
                    </thead>
                    <tbody id="cartBody">
                        @for($i = 0; $i < 20 ; $i++)
                        <tr class="h-[3.5vh]">
                            <td class="border border-black w-12 h-10"></td>
                            <td class="border border-black w-36"></td>
                            <td class="border border-black w-52"></td>
                            <td class="border border-black w-16"></td>
                            <td class="border border-black w-40"></td>
                            <td class="border border-black w-20"></td>
                            <td class="border border-black w-40"></td>
                            <td class="border border-black"></td>
                        </tr>
                        @endfor 
                    </tbody>
                </table>
            </div>
            {{-- End of Tabel --}}

            {{-- Start Side Bar --}}
            <div id="berhasilAlert" class=" float-right w-[19.2vw] h-12 mt-12 mr-[3%] bg-green-600 bg-opacity-25 opacity-0  pt-[0.85rem] pb-2 text-sm border transition-opacity duration-700 border-green-600 text-green-600 font-bold tracking-wide rounded-md text-center">
                {{-- Berhasil di Edit ! --}} 
            </div>
            <div class=" float-right w-[25%] mt-[13.5%] pl-[3%]">

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
                    <a href="/">
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
    
    
    <script src="{{asset('src/index.js')}}"></script>
@endsection