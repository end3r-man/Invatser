<div class="size-full bg-[#1F2544] flex items-center">

    @livewire('component.side-bar')

    <div class="h-full w-[calc(100%-320px)] bg-[#474F7A] p-6">

        {{-- Top Title & Buttons --}}
        <div class="w-full py-2 flex items-center justify-between mb-4">

            <h2 class="text-2xl font-semibold text-white">Clients</h2>

            <div class="w-auto flex items-center gap-x-3">

                <button class="px-4 py-2 rounded-md bg-white">Export</button>
                <button class="px-4 py-2 rounded-md bg-white">Clear</button>

            </div>

        </div>

        {{-- Client Details Tab --}}
        <div class="w-full h-auto rounded-xl bg-white flex items-center justify-between">

            <div class="w-auto h-auto flex items-center">
                <div class="w-auto px-4 py-6 flex flex-row items-center gap-x-2 border-r border-[#81689D]">
                    <iconify-icon class="text-3xl text-[#81689D]" icon="ph:users-three-fill"></iconify-icon>
                    12 Total Clients
                </div>

                <div class="w-auto px-4 py-6 flex flex-row items-center gap-x-2 border-r border-[#81689D]">
                    <iconify-icon class="text-3xl text-[#81689D]" icon="ph:list-checks-fill"></iconify-icon>
                    36 Active Clients
                </div>

                <div class="w-auto px-4 py-6 flex flex-row items-center gap-x-2 border-r border-[#81689D]">
                    <iconify-icon class="text-3xl text-[#81689D]" icon="ph:list-bullets-fill"></iconify-icon>
                    50 In-Active Clients
                </div>
            </div>


            <div
                class="w-auto px-4 py-6 flex flex-row items-center gap-x-2 bg-[#81689D] cursor-pointer rounded-r-xl group/item">
                <iconify-icon
                    class="text-3xl text-white transition-all duration-150 ease-linear group-hover/item:rotate-45"
                    icon="ph:plus-duotone"></iconify-icon>
                New Clients
            </div>

        </div>

        {{-- Client Filter Area --}}
        <div class="w-full h-auto flex items-center justify-between gap-x-2 mt-4">
            <input class="py-2 px-4 w-80 bg-white rounded-md outline-none" type="text" name="search" placeholder="Search make by name...">

            <div class="w-auto p-2 center bg-[#81689D] gap-x-2 rounded-md">
                <iconify-icon class="text-white text-2xl" icon="ph:grid-four-fill"></iconify-icon>
                <span class="text-white">:</span>
                <iconify-icon class="text-white text-2xl" icon="ph:text-columns-duotone"></iconify-icon>
            </div>
        </div>

        {{-- User Table --}}
    </div>
</div>
