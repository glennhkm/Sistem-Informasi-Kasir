<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
    <link rel="icon" href="{{ url('assets/img/horemart.png')}}" type="image/icon">
</head>
<body>
    
    <div class="flex flex-col items-center justify-center h-screen w-screen bg-[#1E1E1E]">
            <div class="flex flex-col justify-center w-[25vw]  pb-[5vh] rounded-[1.4vh] font-poppins bg-white text-white">
                <div class="justify-center bg-red-800 rounded-t-[1.4vh] py-[3vh]">
                    <h2 class="text-center text-[3vh] font-bold tracking-[0.2vw] ">LOGIN</h2>
                </div>
                
                <div class="mt-[3vh] mx-[2.4vw]">
                    <form class="space-y-[3.8vh]" action="" method="POST">
                        @csrf
                        <div>
                            {{-- <label for="Username" class="block text-sm font-medium leading-6 text-gray-900"></label> --}}
                            <div class=" px-[0.5vw] border-b-[0.3vh] border-black">
                                <img src="\assets\img\username.png" alt="" class=" inline-block w-[1vw] mr-[0.5vw] mb-[0.4vh]">
                                <input id="username" name="username" placeholder="Username" type="username" autocomplete="off" required required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="this.setCustomValidity('')"  class=" inline-block w-[80%] py-[0.5vh] text-gray-900  focus:outline-none text-[1.8vh]" value="{{ old('username') }}">

                            </div>
                        </div>
                        
                        <div>

                            {{-- <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900"></label>
                            </div> --}}
                            <div class=" flex pl-[0.5vw] pr-[0.4rem] py-[0.5vh] border-b-[0.3vh] border-black">
                                <img src="\assets\img\password.png" alt="" class="w-[1.2vw] h-[2.5vh] mr-[0.8vw]">
                                <input id="password" placeholder="Password" name="password" type="password" autocomplete="off" required oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="this.setCustomValidity('')" class="w-full text-gray-900 focus:outline-none text-[1.8vh] " value="{{ old('password') }}">                                  
                                <button type="button" id="togglePassword" class=" w-[1.7vw] h-[3vh]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[1.7vw] h-[3vh] mr-[0vh] text-black hover:text-red-800" id="eye-icon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        @if ($errors->has('error'))
                        <div class="flex bg-red-600 bg-opacity-10 font-poppins gap-4 text-red-600 px-5 py-3 text-xs rounded-md">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-[0.11rem] w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                  </svg>                                  
                            </div>
                            <div class="">
                                {{ $errors->first('error') }}
                            </div>
                        </div>
                        @endif
                        
                        <div>
                            <button type="submit" class="flex w-[8.2vw] h-[4.9vh] px-[2.7vw] py-[1vh] rounded-[0.7vh] bg-red-800 mx-auto mt-[7vh] text-[1.9vh] font-semibold text-white shadow-sm hover:scale-[1.1] duration-[0.4s] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
                        </div>
                    </form>
                    
                </div>
            </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            if (type === 'text') {
                eyeIcon.innerHTML = 
                    ` <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                `;
            } else {
                eyeIcon.innerHTML = 
                    `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                `;
            }
        });
    </script>

</body>
</html>