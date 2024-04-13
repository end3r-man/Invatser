<div>
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Page Title Starts -->
        <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
            <h5>Client List</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a wire:navigate href="{{ route('user.prod') }}">Client @if ($count == 1) List @elseif ($count ==2) Create @else Edit @endif</a>
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

                    <a class="btn btn-primary" wire:click='addclnt' role="button">
                        <iconify-icon icon="solar:add-circle-line-duotone" class="text-2xl"></iconify-icon>
                        <span class="hidden sm:inline-block">Add Client</span>
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
                            <th class="w-[10%] uppercase">Name</th>
                            <th class="w-[10%] uppercase">Phone</th>
                            <th class="w-[10%] uppercase">Email</th>
                            <th class="w-[10%] uppercase">Active</th>
                            <th class="w-[10%] uppercase">Group</th>
                            <th class="w-[10%] uppercase">Created</th>
                            <th class="w-[5%] !text-right uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody wire:poll>
                        <tr>
                            @foreach ($clinli as $item)
                            <td>
                                <input class="checkbox product-checkbox" type="checkbox" />
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <label wire:click.prevent='clntact({{$item->id}})' for="toggle-unchecked-input" class="toggle">
                                    @if ($item->active == false)
                                        <input class="toggle-input peer sr-only" id="toggle-unchecked-input" type="checkbox">
                                    @elseif ($item->active == true)
                                        <input class="toggle-input peer sr-only" id="toggle-unchecked-input" type="checkbox" checked>
                                    @endif
                                    <div class="toggle-body"></div>
                                </label>
                            </td>
                            <td>Null</td>
                            <td>{{$item->created_at->format('d M y')}}</td>
                            <td>
                                <div class="flex justify-end gap-x-2">
                                    <div class="dropdown" data-placement="bottom-start">
                                        <div wire:click='edit({{$item->id}})' class="dropdown-toggle">
                                            <iconify-icon icon="solar:pen-new-square-bold-duotone" class="text-2xl text-teal-300">
                                            </iconify-icon>
                                        </div>
                                    </div>
                                    <div class="dropdown" data-placement="bottom-start">
                                        <div wire:click='delete' class="dropdown-toggle">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone" class="text-2xl text-danger-500">
                                            </iconify-icon>
                                        </div>
                                    </div>
                                    
                                </div>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Product Table Ends -->

            <!-- Product Pagination Starts -->
            {{-- {{$prodli->links()}} --}}
            <!-- Product Pagination Ends -->
        </div>
        <!-- Product List Ends -->
        @elseif ($count == 2)
            <form wire:submit.prevent='saveclnt'>
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                    <!-- Left side Div Start -->
                    <section class="flex flex-col gap-8 lg:col-span-2 w-full">
                        <!-- General  -->
                        <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                            <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Product</h5>
                            <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                                Basic information of your product
                            </p>
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-full-name"> Full name </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:user-circle-line-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='name' class="input @error('name') is-invalid @enderror" id="form-with-icon-full-name" name="full-name" type="text" placeholder="Full name">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-email"> Email </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:mailbox-line-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='email' class="input @error('email') is-invalid @enderror" id="form-with-icon-email" name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-phone"> Phone </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:call-chat-rounded-bold-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='phone' class="input @error('phone') is-invalid @enderror" id="form-with-icon-phone" name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-phone"> Address </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <iconify-icon class="text-lg" icon="solar:document-add-line-duotone"></iconify-icon>
                                </span>
                                <textarea wire:model='address' class="textarea @error('address') is-invalid @enderror"></textarea>
                            </div>
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
                                    <label class="label mb-1 label-required font-medium" for="vendor">City</label>
                                    <input wire:model='city' type="text" class="input @error('city') is-invalid @enderror" id="code" />
                                </div>
                                <div>
                                    <label class="label mb-1 label-required font-medium" for="vendor">State</label>
                                    <input wire:model='state' type="text" class="input @error('state') is-invalid @enderror" id="code" />
                                </div>
                                <div>
                                    <label class="label mb-1 label-required font-medium" for="vendor">Pin Code</label>
                                    <input wire:model='pincode' type="number" class="input @error('pincode') is-invalid @enderror [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" id="code" />
                                </div>
                                <div>
                                    <label class="label label-required mb-1 font-medium" for="status">Country</label>
                                    <select wire:model='county' class="select @error('county') is-invalid @enderror"
                                        id="status">
                                        <option >Select Country</option>
                                        @foreach (App\Enums\country::cases() as $country)
                                            <option value="{{ $country->value }}">{{ $country->value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-outline-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </section>
                    <!-- Right Side Div End  -->
                </div>
            </form>
            @elseif ($count == 3)
            <form wire:submit.prevent='saveclnt'>
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                    <!-- Left side Div Start -->
                    <section class="flex flex-col gap-8 lg:col-span-2 w-full">
                        <!-- General  -->
                        <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                            <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Product</h5>
                            <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                                Basic information of your product
                            </p>
                            <div class="w-full">
                                <label class="label label-required mb-1" for="form-with-icon-full-name"> Full name </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:user-circle-line-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='name' class="input @error('name') is-invalid @enderror" id="form-with-icon-full-name" name="full-name" type="text" placeholder="Full name">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-email"> Email </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:mailbox-line-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='email' class="input @error('email') is-invalid @enderror" id="form-with-icon-email" name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-phone"> Phone </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <iconify-icon class="text-lg" icon="solar:call-chat-rounded-bold-duotone"></iconify-icon>
                                    </span>
                                    <input wire:model='phone' class="input @error('phone') is-invalid @enderror" id="form-with-icon-phone" name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="w-full py-2">
                                <label class="label label-required mb-1" for="form-with-icon-phone"> Address </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <iconify-icon class="text-lg" icon="solar:document-add-line-duotone"></iconify-icon>
                                </span>
                                <textarea wire:model='address' class="textarea @error('address') is-invalid @enderror"></textarea>
                            </div>
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
                                    <label class="label mb-1 label-required font-medium" for="vendor">City</label>
                                    <input wire:model='city' type="text" class="input @error('city') is-invalid @enderror" id="code" />
                                </div>
                                <div>
                                    <label class="label mb-1 label-required font-medium" for="vendor">State</label>
                                    <input wire:model='state' type="text" class="input @error('state') is-invalid @enderror" id="code" />
                                </div>
                                <div>
                                    <label class="label mb-1 label-required font-medium" for="vendor">Pin Code</label>
                                    <input wire:model='pincode' type="number" class="input @error('pincode') is-invalid @enderror [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" id="code" />
                                </div>
                                <div>
                                    <label class="label label-required mb-1 font-medium" for="status">Country</label>
                                    <select wire:model='county' class="select @error('county') is-invalid @enderror"
                                        id="status">
                                        <option >Select Country</option>
                                        @foreach (App\Enums\country::cases() as $country)
                                            <option value="{{ $country->value }}">{{ $country->value }}</option>
                                        @endforeach
                                    </select>
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