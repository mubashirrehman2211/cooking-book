@props(['recipe'])
<div class="all-center flex-col justify-center shadow-md min-h-[500px] bg-gray-50 border rounded p-6">
    <div class="flex">
        <img src="{{ $recipe->image ? asset('storage/' . $recipe->image) : asset('/images/no-image.png') }}"
            class="w-full h-40 rounded hover:scale-110 duration-500 overflow-hidden my-3" alt="image">
    </div>
    <h3 class="text-2xl font-sans text-gray-700">
        {{ $recipe->title }}
    </h3>
    <p class="text-justify p-2 font-light max-h-20 overflow-hidden ..">{{ $recipe->instruction }}</p>
    <button
        class="border-2 border-[#3bc195] rounded bg-[#3bc195] text-gray-50 font-semibold p-2 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5"><a
            href="/recipe/{{ $recipe['id'] }}">View Recipes</a>
    </button>

    <x-flash-message></x-flash-message>

</div>
