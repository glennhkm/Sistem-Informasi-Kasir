@extends('layout')
@section('title','Transaksi')
    
@section('body')
<div class="h-[88vh] overflow-hidden">
    {{-- Start Dropdown Data dan Waktu --}}
    <div class=" h-[10vh] font-poppins mt-[3vh] clear-both w-screen">
        {{-- Start Data --}}
        <div class=" inline-block float-left ml-[2.1vw]">
            <p class=" font-bold text-[2.5vh] mb-[1.2vh]">Data Transaksi</p>

            <div class=" font-medium inline-block border-[0.1vh]  w-[9vw] h-[4vh] border-black rounded-[0.6vh] bg-[#D9D9D9]">
                <p class=" inline-block px-[0.4vw] py-[0.01vw] border-r-[0.1vh] text-[2.5vh] w-[5vw] h-full border-black">Show</p>
                <select name="" id="jumlahBarang" onchange="updateJumlahBarang()" class="bg-[#D9D9D9] focus:outline-none appearance-none box-border py-[0.01vh] px-[0.01vw] text-center text-[2.5vh] w-[3vw] h-[3.5vh] cursor-pointer">
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
        {{-- End Data --}}

        {{-- Start Waktu --}}
        <div class=" float-right mr-[3.2vw]">
            <p class="font-bold text-[2.5vh] mb-[1.4vh]">Urutkan Berdasarkan</p>
            {{-- <form action="{{ route('transaksi.filter') }}" method="GET" id="filterForm"> --}}
                <div class="flex">
                    <select name="waktu" id="waktu" onchange="updateJumlahBarang()" class="font-medium rounded-[0.6vh] border-[0.15vh] text-[2vh] border-black ml-auto">
                        <option value="0">Seluruhnya</option>
                        <option value="1000">Hari ini</option>
                        <option value="1">Kemarin</option>
                        <option value="3">3 hari lalu</option>
                        <option value="7">7 hari lalu</option>
                        <option value="30">1 bulan lalu</option>
                        <option value="90">3 bulan lalu</option>
                        <option value="365 ">1 tahun lalu</option>
                    </select>
                </div>
            {{-- </form> --}}
        </div>
        {{-- End Waktu --}}
    </div>
    {{-- End of Data dan Waktu --}}

    {{-- Start Tabel Transaksi --}}
    <div class=" w-[94.8%] h-[53vh] ml-[2.1vw] mt-[3.8vh] font-poppins overflow-scroll" id="printArea">
        <table class=" w-full text-[2vh] text-center">
            <thead id="tableHead" class="bg-[#C02126] text-white sticky top-[0px] font-semibold">
                <tr class="h-[5vh]">
                    <td class="border-[0.1vh] border-black">No</td>
                    <td class="border-[0.1vh] border-black">ID Transaksi</td>
                    <td class="border-[0.1vh] border-black">ID Barang</td>
                    <td class="border-[0.1vh] border-black">Nama Barang</td>
                    <td class="border-[0.1vh] border-black">Qty</td>
                    <td class="border-[0.1vh] border-black"><h1>Harga</h1><p class=" text-[1vh]">(harga-(harga * dics))+(harga diskon * pajak)</p></td>
                    <td class="border-[0.1vh] border-black">Tanggal</td>
                </tr>
            </thead>
            <tbody id="bodyTable">
                @include('tabletransaksi')

            </tbody>
        </table>
    </div>
    {{-- End of Tabel Transaksi  --}}

    {{-- Start footer --}}
    <div class=" h-[10vh] w-screen ml-[2.1vw]  mt-[4vh] clear-both items-center">
        <a href="{{ route('home') }}" class="float-left mt-[1vh]">
            <button class=" hover:scale-[1.05] duration-[0.4s] ">
                    <img src="{{url('assets/img/logout.png')}}" alt="logout" class=" w-[3.8vw] inline-block">
                    <p class=" inline-block text-[4vh] font-bold align-middle">BACK</p>
            </button>
        </a>
        <button onclick="printTransaksi()" class="mr-[5.5vw] mt-[1.8vh] float-right bg-red-700 hover:scale-110 duration-300 text-white text-[1.9vh] font-poppins font-semibold tracking-wide h-[4.5vh] w-[11vw] rounded-[0.7vh]">
            Print Transaksi
        </button>
    </div>
    {{-- End of Footer --}}
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>

    var tanggalSekarang = document.getElementById('tanggalSekarang').innerHTML;
    let jumlahBarang;
    let waktu;

    function updateJumlahBarang() {
        jumlahBarang = document.getElementById('jumlahBarang').value;
        waktu = document.getElementById('waktu').value; 
        
        $.ajax({
            url: '/urutkan-berdasarkan',
            method: 'GET',
            data: {
                waktu: waktu,
                jumlahBarang: jumlahBarang
            },
            success: function(response) {
                document.getElementById('bodyTable').innerHTML = response;
            },
            error: function(error) {
                console.error('Gagal mengambil data: ', error);
            }
        });
        
    }
    
    
    function printTransaksi(){
        var original = document.body.innerHTML;
        var tableHead = document.getElementById('tableHead');
        var jumlah = jumlahBarang;
        var rangeWaktu = waktu;
        var tambahanKalimat = ' hari terakhir sampai';


        tableHead.classList.add('bg-red-700');  
        tableHead.classList.remove('bg-[#C02126]');  
        
        var area = document.getElementById('printArea').innerHTML;
        
        jumlah = jumlah == 0 || jumlah == null ? 'Semua' : jumlah;
        
        rangeWaktu = rangeWaktu == 0 || rangeWaktu == null ? 'Seluruhnya sampai' : rangeWaktu == 1000 ? 'Hari ini,' : rangeWaktu == 365 ? 'Setahun terakhir sampai' : rangeWaktu + tambahanKalimat;

        document.body.innerHTML = `
            <div class="flex flex-col gap-5 py-1 px-8">
                <div class="flex gap-2 items-center justify-center mb-5">
                    <div>
                        <img class="object-cover h-14" src="/assets/img/horemart.png" />
                    </div>
                    <p class="text-[4vh] font-bold text-[#C02126] inline-block box-border ">HORE<span class="text-[#C16F1D]">MART</span></p>
                </div>
                <div class=" text-black text-lg text-center uppercase font-poppins font-bold">
                    Data ${jumlah} Transaksi ${rangeWaktu} ${tanggalSekarang}
                </div>
                <div>
                    ${area}
                </div>
            </div>
        `
        setTimeout(() => {
            window.print();
        }, 1);
        
        setTimeout(() => {
            document.body.innerHTML = original;
            location.reload(true);
        }, 2);
    }
    
</script>
@endsection