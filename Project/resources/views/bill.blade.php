<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bill HoreMart</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        
        <section class=" pt-10 pb-6 flex items-center flex-col gap-8 font-poppins  ">
            <div class="max-w-5xl mx-auto pt-4 pb-5 border bg-white shadow-lg drop-shadow-xl" id="printArea">
                <article class="overflow-hidden">
                    <div class="bg-[white] rounded-b-md">
                        <div class="px-9 py-3 ">
                            <div class="space-y-6 text-slate-700">
                                <img class="object-cover h-12" src="/assets/img/horemart.png" />
                                
                                <p class="text-[4vh] font-bold text-[#C02126] inline-block ">HORE<span class="text-[#C16F1D]">MART</span></p>
            </div>
        </div>
        <div class="px-10 py-3">
            <div class="flex w-full">
             <div class="grid grid-cols-4 gap-12">
                 <div class="text-sm font-light text-slate-500">
                     <p class="text-sm font-normal text-slate-700">
                         Invoice Detail:
                        </p>
                        <p>Unwrapped</p>
                        <p>Fake Street 123</p>
                        <p>San Javier</p>
               <p>CA 1234</p>
            </div>
            <div class="text-sm font-light text-slate-500">
                <p class="text-sm font-normal text-slate-700">Billed To</p>
                <p>The Boring Company</p>
                <p>Tesla Street 007</p>
                <p>Frisco</p>
                <p>CA 0000</p>
            </div>
            <div class="text-sm font-light text-slate-500">
                <p class="text-sm font-normal text-slate-700">Invoice Number</p>
                <p>000000</p>
                
                <p class="mt-2 text-sm font-normal text-slate-700">
                    Date of Issue
                </p>
               <p>00.00.00</p>
            </div>
            <div class="text-sm font-light text-slate-500">
                <p class="text-sm font-normal text-slate-700">Terms</p>
                <p>0 Days</p>
                
                <p class="mt-2 text-sm font-normal text-slate-700">Due</p>
                <p>00.00.00</p>
            </div>
        </div>
    </div>
           </div>
           
           <div class="px-9 py-3">
               <div class="flex flex-col mx-0 mt-8">
                   <table class="min-w-full divide-y divide-slate-500">
                       <thead>
                           <tr>
                               <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-bold text-slate-700 sm:pl-6 md:pl-0">
                                   Nama Barang
                                </th>
                                <th scope="col" class="py-3.5 px-3 text-right text-sm font-bold text-slate-700 sm:table-cell">
                                    Jumlah
                                </th>
                                <th scope="col" class="py-3.5 px-3 text-right text-sm font-bold text-slate-700 sm:table-cell">
                                    Diskon
                                </th>
                                <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-bold text-slate-700 sm:pr-6 md:pr-0">
                                    Harga
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matchingWaktu as $item)
            <tr class="border-b border-slate-200">
                <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                    <div class="font-medium text-slate-700">{{$item->nama_barang}}</div>
                    <div class="mt-0.5 text-slate-500 sm:hidden">
                        1 unit at $0.00
                    </div>
                </td>
                <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                    {{$item->jumlah_barang}}
                </td>
                <td class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                    {{$item->barang->diskon*1}}%
                </td>
                <td class="py-4 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                    Rp {{number_format($item->sub_total, 0, ',', '.')}}
                </td>
            </tr>
            @endforeach
            
            <!-- Here you can write more products/tasks that you want to charge for-->
            {{-- <tfoot> --}}
                <tr>
                    <th scope="row" colspan="3" class="hidden pt-6 pl-6 pr-3 text-sm font-semibold text-right text-slate-500 sm:table-cell md:pl-0">
                        Subtotal
                    </th>
                    <th scope="row" class="pt-6 pl-4 pr-3 text-sm font-semibold text-left text-slate-500 sm:hidden">
                        Subtotal
                    </th>
                    <td class="pt-6 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                        Rp {{number_format($totalSubTotal, 0, ',', '.')}}
                    </td>
                </tr>
                <tr>
                </tr>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-semibold text-right text-slate-500 sm:table-cell md:pl-0">
                            Pajak
                        </th>
                        <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
                            Tax
                        </th>
                        <td class="pt-4 pl-3 pr-4 text-sm text-right text-slate-500 sm:pr-6 md:pr-0">
                            10%
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" colspan="3" class="hidden pt-4 pl-6 pr-3 text-sm font-bold text-right text-slate-700 sm:table-cell md:pl-0">
                            Total
                        </th>
                        <th scope="row" class="pt-4 pl-4 pr-3 text-sm font-normal text-left text-slate-700 sm:hidden">
                            Total
                        </th>
                        <td class="pt-4 pl-3 pr-4 text-sm font-normal text-right text-slate-700 sm:pr-6 md:pr-0">
                            Rp {{number_format($totalSubTotal + ($totalSubTotal * 0.1), 0, ',', '.')}}
                        </td>
                    </tr>
                    {{-- </tfoot> --}}
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    {{-- <div class="mt-48 p-9">
        <div class="border-t pt-9 border-slate-200">
            <div class="text-sm font-light text-slate-700">
                <p>
                    Payment terms are 14 days. Please be aware that according to the
                    Late Payment of Unwrapped Debts Act 0000, freelancers are
                    entitled to claim a 00.00 late fee upon non-payment of debts
                    after this time, at which point a new invoice will be submitted
                    with the addition of this fee. If payment of the revised invoice
                    is not received within a further 14 days, additional interest
                    will be charged to the overdue account and a statutory rate of
                    8% plus Bank of England base of 0.5%, totalling 8.5%. Parties
                    cannot contract out of the Act’s provisions.
                </p>
            </div>
        </div> --}}
    </div>
</div>
</article>
</div>
<button onclick="printButton()" class="bg-blue-700 text-white py-1 w-24 rounded-md hover:scale-110 duration-300 font-semibold ">Print</button>
</section>
</body>
</html>

<script>
    const originalContents = document.body.innerHTML;
    function printButton(){
        var printContents = document.getElementById('printArea').innerHTML;
        
        // Menyiapkan halaman untuk mencetak
        document.body.innerHTML = printContents;
        
        // Mencetak halaman
        window.print();
        
        // Mengembalikan konten asli ke halaman
        document.body.innerHTML = originalContents;
    }
</script>
