<div class="size-full bg-[#1F2544] center">

    <div class="w-[520px] h-auto bg-white rounded-xl py-6 px-12 flex items-center justify-start flex-col gap-y-6">

        <h1 class="w-full text-center text-2xl text-[#1F2544] font-semibold">Login</h1>

        <div class="w-full h-auto center relative">
            <iconify-icon class="text-xl text-[#1F2544] absolute top-1/2 -translate-y-1/2 left-4"
                icon="ph:user-fill"></iconify-icon>
            <input wire:model="email"
                class="w-full py-3 pl-11 rounded-md text-[#1F2544] placeholder:text-[#1F2544] bg-white border border-[#1F2544] focus:border-[#1F2544] outline-none focus:ring-0"
                type="email" name="email" placeholder="Email">
        </div>


        <div class="w-full h-auto center relative">
            <iconify-icon class="text-xl text-[#1F2544] absolute top-1/2 -translate-y-1/2 left-4"
                icon="ph:lock-fill"></iconify-icon>
            <input wire:model="pass"
                class="w-full py-3 pl-11 rounded-md text-[#1F2544] placeholder:text-[#1F2544] bg-white border border-[#1F2544] focus:border-[#1F2544] outline-none focus:ring-0"
                type="password" name="email" placeholder="Password">
        </div>

        <div class="w-full h-auto flex items-center justify-between">

            <div wire:click="check = true" class="w-auto flex items-center gap-x-2 cursor-pointer">
                <input wire:model="check"
                    class="rounded border-gray-300 text-[#1F2544] shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                    type="checkbox" name="remember">
                <p>Remember me</p>
            </div>

            <a href="{{ route('login') }}" class="text-[#1F2544] underline">Forgot Password?</a>
        </div>

        <button wire:click="HandleLogin"
            class="w-full py-3 bg-[#1F2544] rounded-md text-white font-semibold">Login</button>

    </div>

    <div class="h-full w-96 absolute top-0 right-0 flex items-end justify-end flex-col gap-y-2 p-3">
        @if ($errors->any())
            @foreach ($errors->all() as $message)
                <div class="w-full py-3 px-4 rounded-md text-white font-semibold bg-red-500">{{ $message }}</div>
            @endforeach
        @endif
    </div>

</div>
