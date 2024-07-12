@if (session()->has('Success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-1/2 right-0 bg-[#42ba96] transform border-[#42ba96] rounded text-white px-2 py-3">
        <p>
            {{ session('Success') }}
    </div>
@endif
