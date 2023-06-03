<!doctype html>
<html data-theme="halloween">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LicenseCard SAMSAT</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->
    <div class="relative bg-center bg-no-repeat bg-cover"
        style="background-image: url(https://images.unsplash.com/photo-1682251024278-67e6f39c1078?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDJ8Q0R3dXdYSkFiRXd8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=60);">
        <div class="inset-0 z-0 opacity-75 bg-gradient-to-b "></div>
        <div class="justify-center min-h-screen mx-0 sm:flex sm:flex-row">
            <div class="z-10 flex flex-col self-center p-10 sm:max-w-5xl xl:max-w-2xl">
                <div class="flex-col self-start hidden text-white lg:flex">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 text-5xl font-bold">Hi ? Welcome Back </h1>
                    <p class="pr-3">Sebelum Anda login, pastikan Anda sudah memiliki akun yang terdaftar di sistem
                        kami.</p>
                </div>
            </div>
            <div class="z-10 flex self-center justify-center ">
                <div class="p-12 mx-auto bg-base-300 rounded-2xl w-100 ">
                    <div class="mb-4">
                        <h3 class="text-2xl font-semibold text-white">Sign In </h3>
                        <p class="text-gray-500">Please sign in to your account.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-5">
                            <div class="space-y-2">
                                <label class="text-sm font-medium tracking-wide text-white">Email</label>
                                <input
                                    class="w-full px-4 py-2 text-base border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-400"
                                    type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus placeholder="mail@gmail.com">
                                @error('email')
                                    <small class="text-red-500 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label class="mb-5 text-sm font-medium tracking-wide text-white">
                                    Password
                                </label>
                                <input
                                    class="content-center w-full px-4 py-2 text-base border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-400"
                                    type="password" name="password" required autocomplete="current-password"
                                    placeholder="Enter your password">
                                @error('password')
                                    <small class="text-red-500 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember" name="remember" type="checkbox"
                                        class="w-4 h-4 bg-blue-500 border-gray-300 rounded focus:ring-blue-400"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="block ml-2 text-sm text-white">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="flex justify-center w-full p-3 font-semibold tracking-wide text-gray-100 transition duration-500 ease-in rounded-full shadow-lg cursor-pointer bg-warning hover:bg-orange-400">
                                    Sign in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
