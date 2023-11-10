<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen bg-[#272320] relative font-poppins">
        <div class="container rounded-[21px] w-[527px] h-[528px] bg-white absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">

            <div class=" bg-[#C02126] h-[108px] text-center rounded-t-[20px]">
                <h1 class=" font-extrabold text-white text-[40px] leading-[108px] tracking-[4px]">LOGIN</h1>
            </div>
            
            <div class=" mt-[70px]">
                <div class=" w-[425px] border-b-[2px] border-black pb-[8px] mx-auto mb-[50px]">
                    <img src="{{url('assets/img/username.png')}}" alt="username" class=" w-[25px] inline-block ml-[10px]">
                    <input type="text" placeholder="Username" class=" h-[31px] mt-[2px] w-[83%] ml-[20px] focus:outline-none">
                </div>
                <div class=" w-[425px] border-b-[2px] border-black pb-[8px] mx-auto">
                    <img src="{{url('assets/img/password.png')}}" alt="username" class=" w-[25px] inline-block ml-[10px]">
                    <input type="password" placeholder="Password" class=" h-[31px] mt-[2px] w-[83%] ml-[20px] focus:outline-none">
                </div>
            </div>

            <div class=" w-[228px] h-[77px] mx-auto mt-[60px]">
                <button id="openHalamanMain"  class=" w-full h-full rounded-xl bg-[#C02126] font-bold text-[40px] text-white duration-[0.5s] hover:scale-[1.1]" >LOG IN</button>
            </div>
            
        </div>
        
        
        <script src="{{asset('src/login.js')}}"></script>
</body>
</html>