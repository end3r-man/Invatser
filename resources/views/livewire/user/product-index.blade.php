<div>
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Page Title Starts -->
        <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
            <h5>Product List</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a wire:navigate href="{{ route('user.prod') }}">Product @if ($count == 1)
                            List
                        @elseif ($count == 2)
                            Create
                        @else
                            Edit
                        @endif
                    </a>
                </li>
            </ol>
        </div>
        <!-- Page Title Ends -->


        <!-- Product List Starts -->
        <div class="space-y-4">
            <!-- Product Header Starts -->
            <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
                <!-- Customer Search Starts -->
                @if ($count == 1)
                    <form
                        class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72">
                        <div class="flex h-full items-center px-2">
                            <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                        </div>
                        <input
                            class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                            type="text" placeholder="Search" />
                    </form>
                @endif
                <!-- Customer Search Ends -->

                <!-- Customer Action Starts -->
                <div class="flex w-full items-center justify-between gap-x-4 md:w-auto">
                    @if ($count == 1)
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

                        <a class="btn btn-primary" wire:click='addprod' role="button">
                            <iconify-icon icon="solar:cart-plus-line-duotone" class="text-2xl"></iconify-icon>
                            <span class="hidden sm:inline-block">Add Product</span>
                        </a>
                    @else
                        <a class="btn btn-primary" wire:click='back' role="button">
                            <iconify-icon icon="solar:arrow-left-bold-duotone" class="text-2xl"></iconify-icon>
                            <span class="hidden sm:inline-block">Back</span>
                        </a>
                    @endif
                </div>
                <!-- Customer Action Ends -->
            </div>
            <!-- Product Header Ends -->
            @if ($count == 1)
                <!-- Product Table Starts -->
                <div class="table-responsive whitespace-nowrap rounded-primary">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="w-[5%]">
                                    <input class="checkbox" type="checkbox" data-check-all
                                        data-check-all-target=".product-checkbox" />
                                </th>
                                <th class="w-[40%] uppercase">Product</th>
                                <th class="w-[10%] uppercase">SKU</th>
                                <th class="w-[10%] uppercase">Price</th>
                                <th class="w-[10%] uppercase">Description</th>
                                <th class="w-[10%] uppercase">Last Ordered</th>
                                <th class="w-[10%] uppercase">Status</th>
                                <th class="w-[5%] !text-right uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody wire:poll>
                            @foreach ($prodli as $prod)
                                @php
                                    $options = json_decode($prod->detail, true);

                                @endphp
                                <tr>
                                    <td>
                                        <input class="checkbox product-checkbox" type="checkbox" />
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-3">
                                            <img src="{{ asset('assets/images/product16.png') }}"
                                                class="h-10 w-10 rounded-primary border border-slate-300 dark:border-slate-400"
                                                alt="product" />
                                            <div>
                                                <h6
                                                    class="whitespace-nowrap text-sm font-medium text-slate-700 dark:text-slate-100">
                                                    {{ $prod->name }}
                                                </h6>
                                                <p class="truncate text-xs text-slate-500 dark:text-slate-400">
                                                    {{ $options['cate'] }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $prod->code }}</td>
                                    <td>{{ $prod->price }}</td>
                                    <td>{{ $prod->desc }}</td>
                                    <td>{{ $prod->updated_at->format('d M y') }}</td>
                                    <td>
                                        <div
                                            class="badge @if ($options['stat'] == 'Active') badge-soft-success @else badge-danger @endif">
                                            {{ $options['stat'] }}</div>
                                    </td>

                                    <td>
                                        <div class="flex justify-end gap-x-2">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div wire:click='edit({{ $prod->id }})' class="dropdown-toggle">
                                                    <iconify-icon icon="solar:pen-new-square-bold-duotone"
                                                        class="text-2xl text-teal-300">
                                                    </iconify-icon>
                                                </div>
                                            </div>
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div wire:click='delete({{ $prod->id }})' class="dropdown-toggle">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone"
                                                        class="text-2xl text-danger-500">
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
                {{ $prodli->links() }}
                <!-- Product Pagination Ends -->
        </div>
        <!-- Product List Ends -->
    @elseif ($count == 2)
        <form wire:submit='prodsav'>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                <!-- Left side Div Start -->
                <section class="flex flex-col gap-8 lg:col-span-2 w-full">
                    <!-- General  -->
                    <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                        <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Product</h5>
                        <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                            Basic information of your product
                        </p>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium" for="name">Name</label>
                            <input type="text" wire:model='pname'
                                class="input @error('pname') is-invalid @enderror" id="name"
                                placeholder="Write Product Name" />
                        </div>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium" for="code">Code</label>
                            <div class="inputc flex">
                                <input type="text" wire:model='pcode'
                                    class="input @error('pcode') is-invalid @enderror" id="code"
                                    placeholder="Write Product Code" value="{{ $pccode }}" />
                                <button wire:click='pcde' type="button"
                                    class="border-[1px] border-[#475569] rounded-[0.4rem] rounded-r-0 w-12 @error('pcode') is-invalid @enderror"><iconify-icon
                                        icon="uim:refresh"></iconify-icon></button>
                            </div>
                        </div>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium">Message</label>
                            <textarea wire:model='pdesc' class="textarea text-start @error('pdesc') is-invalid @enderror" rows="5"
                                placeholder="Write message"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Left Side Div End  -->

                <!-- Right Side Div Start  -->
                <section class="h-full lg:col-span-1">
                    <!-- Organization -->
                    <div class="sticky top-20 rounded-primary bg-white p-6 shadow dark:bg-slate-800">
                        <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Organization</h5>
                        <p class="mb-4 p-0 text-sm font-normal text-slate-400">Better organize your product</p>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label class="label label-required mb-1 font-medium" for="status"> Status </label>
                                <select wire:model='pstat' class="select @error('pstat') is-invalid @enderror"
                                    id="status">
                                    <option>Select Status</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Active">Active</option>
                                    <option value="Out Stock">Out Stock</option>
                                </select>
                            </div>
                            <div>
                                <label class="label label-required mb-1 font-medium" for="category"> Category </label>
                                <select wire:model='pcate' class="select @error('pcate') is-invalid @enderror"
                                    id="category">
                                    <option>Select Category</option>
                                    @foreach ($cateli as $cate)
                                        <option value="{{ $cate->cate }}">{{ $cate->cate }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="label mb-1 font-medium" for="vendor"> Vendor </label>
                                <select wire:model='pvend' class="select @error('pvend') is-invalid @enderror"
                                    id="vendor">
                                    <option>Select Vendor</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="label mb-1 label-required font-medium" for="vendor">Price</label>
                                <input wire:model='ppric' type="number"
                                    class="input @error('ppric') is-invalid @enderror" id="code" />
                            </div>
                            <button class="btn btn-outline-primary" type="submit">Save</button>
                        </div>
                    </div>
                </section>
                <!-- Right Side Div End  -->
            </div>
        </form>
    @elseif ($count == 3)
        <form wire:submit='prodsav'>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                <!-- Left side Div Start -->
                <section class="flex flex-col gap-8 lg:col-span-2 w-full">
                    <!-- General  -->
                    <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                        <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Product</h5>
                        <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                            Basic information of your product
                        </p>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium" for="name">Name</label>
                            <input type="text" wire:model='pname'
                                class="input @error('pname') is-invalid @enderror" id="name"
                                placeholder="Write Product Name" />
                        </div>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium" for="code">Code</label>
                            <div class="inputc flex">
                                <input type="text" wire:model='pcode'
                                    class="input @error('pcode') is-invalid @enderror" id="code"
                                    placeholder="Write Product Code" value="{{ $pccode }}" />
                                <button wire:click='pcde' type="button"
                                    class="border-[1px] border-[#475569] rounded-[0.4rem] rounded-r-0 w-12 @error('pcode') is-invalid @enderror"><iconify-icon
                                        icon="uim:refresh"></iconify-icon></button>
                            </div>
                        </div>
                        <div class="py-2">
                            <label class="label label-required mb-1 font-medium">Message</label>
                            <textarea wire:model='pdesc' class="textarea text-start @error('pdesc') is-invalid @enderror" rows="5"
                                placeholder="Write message"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Left Side Div End  -->

                <!-- Right Side Div Start  -->
                <section class="h-full lg:col-span-1">
                    <!-- Organization -->
                    <div class="sticky top-20 rounded-primary bg-white p-6 shadow dark:bg-slate-800">
                        <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Organization</h5>
                        <p class="mb-4 p-0 text-sm font-normal text-slate-400">Better organize your product</p>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label class="label label-required mb-1 font-medium" for="status"> Status </label>
                                <select wire:model='pstat' class="select @error('pstat') is-invalid @enderror"
                                    id="status">
                                    <option>Select Status</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Active">Active</option>
                                    <option value="Out Stock">Out Stock</option>
                                </select>
                            </div>
                            <div>
                                <label class="label label-required mb-1 font-medium" for="category"> Category </label>
                                <select wire:model='pcate' class="select @error('pcate') is-invalid @enderror"
                                    id="category">
                                    <option>Select Category</option>
                                    @foreach ($cateli as $cate)
                                        <option value="{{ $cate->cate }}">{{ $cate->cate }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="label mb-1 font-medium" for="vendor"> Vendor </label>
                                <select wire:model='pvend' class="select @error('pvend') is-invalid @enderror"
                                    id="vendor">
                                    <option>Select Vendor</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="label mb-1 label-required font-medium" for="vendor">Price</label>
                                <input wire:model='ppric' type="number"
                                    class="input @error('ppric') is-invalid @enderror" id="code" />
                            </div>
                            <button class="btn btn-outline-primary" type="submit">Save</button>
                        </div>
                    </div>
                </section>
                <!-- Right Side Div End  -->
            </div>
        </form>
        @endif
    </main>
</div>
