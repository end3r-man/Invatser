<div class="h-full w-80 bg-[#1F2544] flex flex-col items-center justify-start">

    <div class="w-full h-16 flex items-center justify-between px-4 py-2">
        <img class="h-3/5" src="https://laravel.com/img/logotype.min.svg" alt="dash-logo">

        <span class="px-2 rounded-md bg-slate-500 border border-slate-400 text-white">K</span>
    </div>

    <div class="w-full h-auto flex flex-col justify-center items-start p-2">

        <p class="text-lg text-slate-300 pt-2 px-4">General</p>

        <x-dash.nav-link icon="ph:cardholder-fill" route="admin.dash" >Dashboard</x-dash.nav-link>
        <x-dash.nav-link icon="ph:users-three-fill" route="admin.client" >Clients</x-dash.nav-link>

    </div>

</div>