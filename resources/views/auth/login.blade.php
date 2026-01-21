@extends('layouts.app')

@section('content')
<div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

    {{-- LEFT SIDE (FORM) --}}
    <div class="flex flex-col justify-center px-10 lg:px-24">
        <div class="max-w-md w-full">

            <h1 class="text-3xl font-semibold mb-2">Welcome Back</h1>
            <p class="text-gray-500 mb-8">
                Silakan login untuk mengakses dashboard admin
            </p>

            <form method="POST" action="/login">
                @csrf

                <div class="mb-5">
                    <label>Email</label>
                    <input type="email" name="email" required
                        class="w-full border px-4 py-2 rounded">
                </div>

                <div class="mb-6">
                    <label>Password</label>
                    <input type="password" name="password" required
                        class="w-full border px-4 py-2 rounded">
                </div>

                <button type="submit"
                        class="w-full bg-blue-700 text-white py-3 rounded">
                    Login
                </button>
            </form>


            <p class="text-xs text-gray-400 mt-6 text-center">
                © {{ date('Y') }} Portal Berita Instansi
            </p>

        </div>
    </div>

    {{-- RIGHT SIDE (IMAGE) --}}
    <div class="hidden lg:flex items-center justify-center bg-blue-50">
        <img src="https://picsum.photos/1400/1400"
             class="max-w-md" alt="Login Illustration">
    </div>

</div>
@endsection
