<div x-data="{ open: false }">
    <main class="container flex-grow p-4 sm:p-6" x-date="{ open: false }">
        <!-- Page Title Starts -->
        <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
            <h5>Category List</h5>
    
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a wire:navigate href="{{ route('user.cate') }}">Category List</a>
                </li>
            </ol>
        </div>
        <!-- Page Title Ends -->
    
        <!-- Product List Starts -->
        <div class="space-y-4">
            <!-- Product Header Starts -->
            <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
                <!-- Customer Search Starts -->
                <form
                    class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72">
                    <div class="flex h-full items-center px-2">
                        <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                    </div>
                    <input
                        class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                        type="text" placeholder="Search" />
                </form>
                <!-- Customer Search Ends -->
    
                <!-- Customer Action Starts -->
                <div class="flex w-full items-center justify-between gap-x-4 md:w-auto">
                    <div class="flex items-center gap-x-4">
                        <div class="dropdown" data-placement="bottom-end">
                            <div class="dropdown-toggle">
                                <button type="button" class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                                    <iconify-icon icon="solar:filter-line-duotone" class="text-2xl"></iconify-icon>
                                    <span class="hidden sm:inline-block">Filter</span>
                                    <iconify-icon icon="solar:alt-arrow-down-line-duotone" class="text-2xl">
                                    </iconify-icon>
                                </button>
                            </div>
                            <div class="dropdown-content w-72 !overflow-visible">
                                <ul class="dropdown-list space-y-4 p-4">
                                    <li class="dropdown-list-item">
                                        <h2 class="my-1 text-sm font-medium">Category</h2>
                                        <select class="tom-select w-full" autocomplete="off">
                                            <option value="">Select a Category</option>
                                            <option value="1">Electronics</option>
                                            <option value="2">Fashion</option>
                                            <option value="3">Accessories</option>
                                        </select>
                                    </li>
    
                                    <li class="dropdown-list-item">
                                        <h2 class="my-1 text-sm font-medium">Status</h2>
                                        <select class="select">
                                            <option value="">Select to Status</option>
                                            <option value="1">Available</option>
                                            <option value="2">Disabled</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                            <iconify-icon icon="solar:export-line-duotone" class="text-2xl"></iconify-icon>
                            <span class="hidden sm:inline-block">Export</span>
                        </button>
                    </div>
    
                    <a class="btn btn-primary" @click="open = ! open" role="button">
                        <iconify-icon icon="solar:cart-plus-line-duotone" class="text-2xl"></iconify-icon>
                        <span class="hidden sm:inline-block">Add Product</span>
                    </a>
                    
                </div>
                <!-- Customer Action Ends -->
            </div>
            <!-- Product Header Ends -->
    
            <!-- Product Table Starts -->
            <div class="table-responsive whitespace-nowrap rounded-primary">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="w-[5%]">
                                <input class="checkbox" type="checkbox" data-check-all
                                    data-check-all-target=".product-checkbox" />
                            </th>
                            <th class="w-[40%] uppercase">Category</th>
                            <th class="w-[10%] uppercase">Product</th>
                            <th class="w-[5%] !text-right uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody wire:poll>
                        @foreach ($cateli as $prod)
                        <tr>
                            <td>
                                <input class="checkbox product-checkbox" type="checkbox" />
                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <h6 class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                            {{$prod->cate}}
                                        </h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{$prod->id}}</td>
                            <td>
                                <div class="flex justify-end">
                                    <div class="dropdown" data-placement="bottom-start">
                                        <div wire:click='delete({{$prod->id}})' class="dropdown-toggle">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone" class="text-2xl text-danger-500">
                                            </iconify-icon>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Product Table Ends -->
    
            <!-- Product Pagination Starts -->
            {{$cateli->links()}}
            <!-- Product Pagination Ends -->
            
        </div>
        <form wire:submit.prevent='catsave' id="form-basic" x-show="open" @click.outside="open = false" x-cloak
            class="mx-auto max-w-lg rounded-primary border border-slate-300 bg-white p-4 shadow dark:border-slate-600 dark:bg-slate-800 absolute top-[40%] left-[50%]"
            action="">
            <h3 class="text-center mb-5">Add Category</h3>
            <hr class="mb-5 border-slate-200 dark:border-slate-600">
            <!-- Form Body -->
            <div class="flex flex-col gap-4">
                <!-- Form Row: Full name -->
                <div class="w-full">
                    <label class="label label-required mb-4" for="form-basic-full-name">Category name</label>
                    <input required wire:model='cate' class="input" id="form-basic-full-name" name="full-name" type="text" placeholder="Category name">
                </div>
            </div>
            <!-- Form Footer -->
            <div class="mt-6 flex w-full items-center justify-end gap-2">
                <button class="btn btn-primary bg-[#8b5cf6]" @click="open = false" type="submit">Submit</button>
                <button class="btn btn-primary" type="button" @click="open = false">Cancle</button>
            </div>
        </form>
    </main>
</div>
