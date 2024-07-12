@extends('layout')

@section('content')
    <div class="all-center justify-center w-screen">
        <form method="POST" action="/user" class="box my-20 border rounded p-5 lg:w-[500px] w-full bg-gray-50">
            @csrf
            <h2 class="text-2xl font-semibold">Register</h2>
            <div class="input-container mt-10 flex flex-col text-left justify-start">
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Name</label>
                    <input type="text" value="{{ old('name') }}" name="name"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Enter your First & Last Name">

                    @error('name')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Enter your Email">

                    @error('email')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Enter your Password">

                    @error('password')
                        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Confirm Password</label>
                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Confirm Password">

                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="m-auto">
                    <button type="submit"
                        class="border-2 border-[#3bc195] rounded bg-[#3bc195] text-gray-50 font-semibold p-2 px-10 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5">Register</button>
                </div>

                <a href="/login" class="text-gray-800 my-3 text-sm text-center justify-center">Already
                    have an account? <span class="text-[#3bc195] font-semibold">Login</span></a>
            </div>
        </form>
    </div>
@endsection
