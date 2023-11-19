@foreach ($transaksi as $item)
<tr class="h-[4.5vh]">
    <td class="border-[0.1vh] border-black">{{$loop->iteration}}</td>
    <td class="border-[0.1vh] border-black">{{$item->id}}</td>
    <td class="border-[0.1vh] border-black">{{$item->kode_barang}}</td>
    <td class="border-[0.1vh] border-black">{{ucwords($item->nama_barang)}}</</td>
    <td class="border-[0.1vh] border-black">{{$item->jumlah_barang}}</</td>
    <td class="border-[0.1vh] border-black">Rp {{number_format($item->harga_total, 0, ',', '.')}}</</td>
    <td class="border-[0.1vh] border-black">{{$item->created_at->translatedFormat('l, d F Y H:i:s')}}</</td>
    {{-- <td class="border border-black"></td> --}} 
</tr>
@endforeach
@for ($i = count($transaksi); $i < 20; $i++)
<tr class="h-[4.5vh]" id="emptyRow">
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
    <td class="border-[0.1vh] border-black"></td>
</tr>
@endfor