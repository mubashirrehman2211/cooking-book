<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>
        {{ config('app.name', 'CookingBook') }}
    </title>
</head>

<body>
    <div class="w-screen h-screen flex flex-col">
        @include('partials._Nav')
        <main class="flex-grow">
            <div class="mt-28  all-center justify-center flex-col">
                <div class="border shadow-sm rounded p-10">
                    <h1 class="text-2xl font-semibold">Welcome to Cooking Book</h1>

                    <button
                        class="border-2 border-[#3bc195] rounded bg-[#3bc195] text-gray-50 font-semibold p-2 hover:bg-gray-50 hover:text-[#3bc195] hover:border-gray-200 duration-300 mt-5"><a
                            href="/recipe">View Recipes</a></button>
                </div>
            </div>
        </main>
        @include('partials._footer')
    </div>
</body>

</html>
