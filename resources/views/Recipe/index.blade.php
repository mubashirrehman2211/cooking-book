@extends('layout')

@section('content')
    @include('partials._hero')
    <div class="w-screen all-center justify-center flex-col mt-16">
        <div class="lg:grid lg:grid-cols-2 gap-4 items-center justify-center space-y-4 md:space-y-0 mx-4 p-5 mt-5">
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>
        <div class="mt-5 p-4 w-full">
            {{ $recipes->links() }}
        </div>
        <button
            class="border-2 border-[#3bc195] rounded bg-[#3bc195] text-gray-50 font-semibold p-2 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 my-5"><a
                href="/createRecipe">Create your own Recipe</a>
        </button>
    </div>
@endsection
