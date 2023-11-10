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
    <div class="w-[484px] h-[505px] border border-black absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] rounded-xl"> 
            {{-- Start Header --}}
            <div class="clear-both h-[75px]">
                <div class="inline-block float-left ml-[155px] mt-[18px]">
                    <p class=" font-semibold text-[22px]">Edit Pembelian</p>
                </div>
                <div class="inline-block float-right">
                    <button class="  mr-[10px] mt-[10px] hover:scale-[1.1]"><img src="{{url('assets/img/x.png')}}" alt="X" class=" w-[26px]"></button>
                </div>
            </div>
            {{-- End of Header --}}
            
            {{-- Start Input --}}
            <div class=" w-[401px] mx-auto mt-[10px]">
                <div>
                    <label for="namaBarang" class="block font-semibold text-[16px] mb-[15px]">Nama Barang</label>
                    <input id="namaBarang" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded mb-[30px] text-[16px] px-[8px]">
                </div>
                <div>
                    <label for="hargaBarang" class="block font-semibold text-[16px] mb-[15px]">Harga Barang</label>
                    <input id="hargaBarang" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded mb-[30px] text-[16px] px-[8px]">
                </div>
                <div>
                    <label for="jumlah" class="block font-semibold text-[16px] mb-[15px]">Jumlah</label>
                    <input id="jumlah" type="text" class=" w-full h-[43px] bg-[#D9D9D9] rounded text-[16px] px-[8px]">
                </div>
            </div>
            {{-- End of Input --}}
            
            {{-- Start Tombol Hapus dan Save --}}
            <div class=" text-white font-semibold text-[16px] mt-[60px] ml-[200px] clear-right">
                {{-- Start Tombol Hapus --}}
                <div class=" inline-block ml-[-25px]">
                    <button class=" w-[128px] h-[32px] bg-[#AD0005] rounded hover:scale-[1.1] duration-[0.4s]">Hapus</button>
                </div>
                {{-- End of Tombol Hapus--}}

                {{-- Start Tombol Save --}}
                <div class="inline-block float-right mr-[25px]">
                    <button class="w-[128px] h-[32px] bg-[#C16F1D] rounded hover:scale-[1.1] duration-[0.4s]">Save</button>
                </div>
                {{-- End of Tombol Save --}}
            </div>
            {{-- End of Tombol Hapus dan Save --}}
    </div>
</body>
</html>