@extends('layout')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden all-center flex-col justify-center">
            {{-- <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="w-full h-64 object-cover"> --}}
            <img src="/images/beef.png" alt="{{ $recipe->title }}" class="w-1/2 backdrop-lg h-full object-cover">
            <div class="p-6">
                <h1 class="text-3xl font-bold mb-2">{{ $recipe->title }}</h1>
                <h2 class="text-3xl font-bold mb-2">{{ $recipe->categoryName }}</h2>
                <p class="text-gray-700 mb-4">{{ $recipe->instruction }}</p>
                <button
                    class="mr-2 border-2 border-[#333] rounded bg-[#333] text-gray-50 font-semibold p-2 px-10 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5">
                    <a href="/recipe">
                        Back
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
