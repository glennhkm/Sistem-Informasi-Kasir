@foreach ($barang as $item)
    <tr class="h-[5vh]">
        <td class="border-[0.1vh] border-black">{{$loop->iteration}}</td>
        <td class="border-[0.1vh] border-black">{{$item->id}}</td>
        <td class="border-[0.1vh] border-black">{{ ucwords($item->nama_barang) }}</td>
        <td class="border-[0.1vh] border-black">{{$item->stok}}</td>
        <td class="border-[0.1vh] border-black">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
        <td class="border-[0.1vh] border-black">{{$item->diskon*1}}%</td>
        <td class="border-[0.1vh] border-black">
            <div class="flex justify-center gap-[1vw] text-sm text-white">
                <button onclick="setSelectedBarangId({{$item->id}}, 'edit-modal', '{{$item->nama_barang}}', {{$item->stok}}, {{$item->harga}}, '{{$item->diskon}}')" class="text-[1.8vh] rounded-[0.6vh] bg-[#C16F1D] hover:scale-110 duration-300 w-[4.5vw] h-[3.5vh]">
                    Edit
                </button>
                <button onclick="setSelectedBarangId({{$item->id}}, 'delete-modal')" type="submit" class="w-[4.5vw] h-[3.5vh] text-[1.7vh] rounded-[0.6vh] bg-red-800 hover:scale-110 duration-300">
                    Hapus
                </button>
            </div>
        </td>
    </tr>
@endforeach
@for($i = count($barang); $i < 20; $i++)
<tr class="h-[4vh]">
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
</tr>
@endfor