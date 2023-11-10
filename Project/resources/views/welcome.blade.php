@extends('layout')
@section('title', 'Welcome')

@section('body')
    <div class="flex flex-row justify-center text-black font-poppins gap-80">
        <div class="flex flex-col gap-2 my-12 mr-10">
            <label class="block mb-2 text-5xl font-semibold uppercase" for="caribarang">
              Cari barang
            </label>
            <input
              class="text-4xl leading-tight text-black border shadow-lg appearance-none pl py-9 pr-80 placeholder:italic pl-7 placeholder:text-4xl rounded-2xl placeholder:font-extralight focus:outline focus:shadow-outline"
              id="namaBarang" type="text" placeholder="Nama barang ......">
        </div> 
        <div class="flex pt-6 pl-6 text-4xl font-bold text-red-700 uppercase border-l-2 border-gray-400">
            total
        </div>
        <div class="my-24 font-semibold uppercase text-9xl">
            Rp. 300.000
        </div>
    </div>
    <div class="border-t-2 border-gray-400 "></div>

    <div class="flex gap-5 ml-28">

      <table class="w-4/6 h-0 text-3xl text-white border-collapse table-auto my-9 border-slate-500 font-poppins">
        <thead>
          <tr class="bg-red-700">
            <th class=" font-medium border px-1 py-7 border-black ...">No</th>
            <th class="font-medium border border-black ...">Kode barang</th>
            <th class="font-medium border border-black ...">Nama barang</th>
            <th class="font-medium border border-black ...">Qty</th>
            <th class="font-medium border border-black ...">Harga</th>
            <th class="font-medium border border-black ...">Disc%</th>
            <th class="font-medium border border-black ...">Subtotal</th>
            <th class="font-medium border border-black ...">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-1 py-7 border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
          </tr>
        <tr >
            <td class="border px-1 py-7 border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
          </tr>
        <tr>
            <td class="border px-1 py-7 border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>
            <td class="border border-black ..."></td>    
          </tr>
        </tbody>
      </table>
      
      <div class=" h-screen flex items-center justify-center w-1/2 flex-col text-3xl font-poppins font-medium">
        <div class=" flex border border-black rounded-lg py-6 px-32">
          Daftar barang
        </div>
        
        {{-- <div>
          {{Auth::user()->username}}
        </div> --}}
      </div>
    </div>

@endsection