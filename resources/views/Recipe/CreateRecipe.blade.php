@extends('layout')

@section('content')
    <div class="all-center justify-center w-screen">
        <form method="POST" action="/Recipe" enctype="multipart/form-data"
            class="box bg-gray-50 my-20 border rounded p-5 lg:w-[450px] w-full">
            @csrf
            <h2 class="text-2xl font-semibold">Create Recipe</h2>
            <div class="input-container mt-10 flex flex-col text-left justify-start">
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Recipe Name</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Enter Recipe Name">

                    @error('title')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Category Name</label>
                    <input type="text" name="categoryName" value="{{ old('categoryName') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]" placeholder="Enter Category Name">

                    @error('categoryName')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Add Image</label>
                    <input type="file" name="image" value="{{ old('image') }}"
                        class="border px-3 py-2 focus:outline-[#3bc195]">
                </div>

                <div class="flex flex-col mb-6">
                    <label for="name" class="mb-1 font-serif">Instruction</label>
                    <textarea cols="5" rows="5" name="instruction" value="{{ old('instruction') }}"
                        placeholder="Write instruction about your Recipe." class="border px-3 py-2  focus:outline-[#3bc195]"></textarea>

                    @error('instruction')
                        <p class="text-red-500 mt-1 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="all-center justify-center flex-col">
                    <button
                        class="border-2 border-[#3bc195] rounded bg-[#3bc195] text-gray-50 font-semibold p-2 px-10 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5">Add
                        recipe
                    </button>
                    <button
                        class="mr-2 border-2 border-[#333] rounded bg-[#333] text-gray-50 font-semibold p-2 px-10 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5">
                        <a href="/recipe">
                            Back
                        </a>
                    </button>
                </div>
            </div>
    </div>
    </form>
@endsection
