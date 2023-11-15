<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <div class="h-[120px] w-screen bg-[#272320] border-solid border-b-8 border-[#C02126] font-poppins">

        <p class="text-[2.5em] font-bold text-[#C02126] pt-[0.65em] pl-[0.95em] inline-block">HORE<span class="text-[#C16F1D]">MART</span></p>

        <div class="inline-block float-right clear-right text-[#FCF9F9] font-bold mt-[1.55em] mr-[3.12em]">

            <div class=" inline-block mr-16 border-solid border-r-[4px] border-[#FCF9F9] pr-[0.8em]">
                <p class=" text-[14px] pb-[5px]">KASIR</p>
                <p class=" text-[24px]">RAFLI AFRIZA NUGRAHA</p>
            </div>

            <div class=" inline-block border-solid border-r-[4px] border-[#FCF9F9] pr-[0.8em]">
                <p class=" text-[14px] pb-[5px]">Tanggal : </p>
                <p id="realTime" class=" text-[24px] uppercase"> {{\Carbon\Carbon::now()->format('j F Y')}} </p>
            </div>
        </div>
    </div>
    
</head>
<body>
    @yield('body')
    <script src="{{asset('src/index.js')}}"></script>
</body>
</html>