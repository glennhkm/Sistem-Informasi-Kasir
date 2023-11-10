<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pembelian</title>
    @vite('resources/css/app.css')
</head>
<body class=" h-screen relative font-poppins">
    <div class="w-[484px] h-[505px] border border-black absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] rounded-xl bg-white"> 
            {{-- Start Header --}}
            <div class="clear-both h-[75px]">
                <div class="inline-block float-left ml-[155px] mt-[18px]">
                    <p class=" font-semibold text-[22px]">Tambah Barang</p>
                </div>
                <div class="inline-block float-right">
                    <button id="tutupOverlayBarang" class="mr-[10px] mt-[10px] hover:scale-[1.1]"><img src="{{url('assets/img/x.png')}}" alt="X" class=" w-[26px]"></button>
                </div>
            </div>
            {{-- End of Header --}}
            
            {{-- Start Input --}}
            <div class=" w-[401px] mx-auto mt-[5px]">
                <div>
                    <label for="namaBarang1" class="block font-semibold text-[16px] mb-[5px]">Nama Barang</label>
                    <input id="namaBarang1" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded text-[16px] px-[8px] mb-[20px]">
                </div>

                <div>
                    <label for="hargaBarang1" class="block font-semibold text-[16px] mb-[5px]">Harga Barang</label>
                    <input id="hargaBarang1" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded text-[16px] px-[8px] mb-[20px]">
                </div>

                <div>
                    <label for="diskon" class="block font-semibold text-[16px] mb-[5px]">Diskon</label>
                    <input id="diskon" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded text-[16px] px-[8px] mb-[20px]">
                </div>

                <div>
                    <label for="jumlah" class="block font-semibold text-[16px] mb-[5px]">Jumlah</label>
                    <input id="jumlah" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded text-[16px] px-[8px]">
                </div>
            </div>
            {{-- End of Input --}}
            
            {{-- Start Tombol Save --}}
            <div class=" text-white font-semibold text-[16px] h-[32px] w-full text-right mt-[30px]">
                {{-- Start Tombol Save --}} 
                <div class="block mr-[25px]">
                    <button class="w-[128px] h-[32px] bg-[#C16F1D] rounded hover:scale-[1.1] duration-[0.4s]">Save</button>
                </div>
                {{-- End of Tombol Save --}}
            </div>
            {{-- End of Tombol Hapus dan Save --}}
    </div>
    
    <script src="{{asset('src/index.js')}}"></script>
</body>
</html>