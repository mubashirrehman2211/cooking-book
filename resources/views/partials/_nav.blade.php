<div
    class="nav sticky top-0 bg-[#3bc195] z-10 w-full h-16 border-2 border-[#3bc195] all-center justify-between shadow-md md:px-20 px-2 py-2">
    <h1 class="md:text-xl font-semibold text-gray-100"><a href="/recipe">Cooking
            Book</a></h1>
    <div class="all-center gap-3">
        @auth
            <li class="all-center p-2 justify-center list-none font-bold mx-3 text-white">
                <span>
                    {{ auth()->user()->name }}
                </span>
            </li>
            <form method="POST" action="/logout">
                @csrf
                <a href="/logout"
                    class="all-center justify-center font-semibold text-gray-200 md:py-2 py-1 px-3.5 hover:text-gray-100">
                    <button>
                        <i class="fa-solid fa-door-closed text-gray-200"></i>
                        Logout
                    </button>
                </a>
            </form>
        @else
            <a href="/register"
                class="border-2 rounded bg-gray-50 text-[#3bc195] font-semibold md:p-2 p-1 hover:bg-[#3bc195] hover:text-gray-100 duration-300"><button>Register</button></a>
            <a href="/login"
                class="border-2 rounded bg-gray-50 text-[#3bc195] font-semibold md:py-2 py-1 px-3.5 hover:bg-[#3bc195] hover:text-gray-100 duration-300"><button>Login</button></a>
        @endauth
    </div>
</div>
