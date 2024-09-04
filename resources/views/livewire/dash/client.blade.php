<div class="size-full bg-[#1F2544] flex items-center">

    @livewire('component.side-bar')

    <div class="h-full w-[calc(100%-320px)] bg-[#474F7A] p-6">

        {{-- Top Title & Buttons --}}
        <div class="w-full py-2 flex items-center justify-between mb-4">

            <h2 class="text-2xl font-semibold text-white">Clients</h2>

            <div class="w-auto flex items-center gap-x-3">

                <button class="px-4 py-2 rounded-md bg-white">Export</button>
                <button
                    class="px-4 py-2 rounded-md bg-white hover:bg-[#81689D] hover:text-white transition-all ease-linear flex items-center gap-x-2"><iconify-icon
                        icon="ph:plus"></iconify-icon> New Invoice</button>

            </div>

        </div>

        {{-- Table Filter Button --}}
        <div class="w-full h-auto flex items-center gap-x-4 mb-8">
            <button
                class="px-2 py-1 flex items-center gap-x-2 @if ($filter_id == 1) filter-btn-active @else filter-btn @endif">All
                Clients <span class="p-2 bg-[#474F7A] rounded-md">124</span></button>
            <button
                class="px-2 py-1 flex items-center gap-x-2 @if ($filter_id == 2) filter-btn-active @else filter-btn @endif">Active
                Clients <span class="p-2 bg-[#474F7A] rounded-md">124</span></button>
            <button
                class="px-2 py-1 flex items-center gap-x-2 @if ($filter_id == 3) filter-btn-active @else filter-btn @endif">Idel
                Clients <span class="p-2 bg-[#474F7A] rounded-md">124</span></button>
        </div>

        {{-- Table --}}


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>c
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
