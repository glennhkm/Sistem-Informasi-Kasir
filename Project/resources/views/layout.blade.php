<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{asset('style/style.css')}}">
        <title>@yield('title')</title>
        <link rel="icon" href="{{ url('assets/img/money.png')}}" type="image/icon">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <div class="h-[12vh] w-screen bg-[#272320] border-solid border-b-[0.8vh] border-[#C02126] font-poppins clear-right box-border">

        <p class="text-[4vh] font-bold text-[#C02126] pt-[2.7vh] pl-[2.1vw] inline-block box-border ">HORE<span class="text-[#C16F1D]">MART</span></p>

        <div class="w-[30vw] h-[9vh] inline-block float-right clear-both text-[#FCF9F9] font-bold mt-[2.3vh] mr-[3vw] box-border">

            <div class=" inline-block mr-[2vw] border-solid border-r-[0.5vh] border-[#FCF9F9] pr-[1vw] box-border float-left">
                <p class=" text-[1.4vh] pb-[0.8vh]">KASIR</p>
                <p class=" text-[2.5vh]">Budak Korporat</p>
            </div>

            <div class=" inline-block border-solid border-r-[0.5vh] border-[#FCF9F9] pr-[1vw] box-border float-right">
                <p class=" text-[1.4vh] pb-[0.8vh]">Tanggal : </p>
                <p class=" text-[2.5vh] uppercase"> {{\Carbon\Carbon::now()->format('j F Y')}} </p>
            </div>
        </div>
    </div>
    
</head>
<body>
    @yield('body')
    <script src="{{asset('src/index.js')}}"></script>
</body>
</html>