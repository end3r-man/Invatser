<div>
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Page Title Starts -->
        <div class="flex flex-col gap-y-1 justify-between mb-6 sm:flex-row sm:gap-y-0">
            <h5>Product List</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a wire:navigate href="{{ route('user.pay') }}">Payments</a>
                </li>
            </ol>
        </div>
        <!-- Page Title Ends -->


        <!-- Product List Starts -->
        <div class="space-y-4">
            <!-- Product Header Starts -->
            <div class="flex flex-col gap-y-4 justify-between items-center md:flex-row md:gap-y-0">
                <!-- Customer Search Starts -->
                @if ($count == 1)
                    <form
                        class="flex items-center w-full h-10 bg-white border border-transparent shadow-sm group rounded-primary focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72">
                        <div class="flex items-center px-2 h-full">
                            <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                        </div>
                        <input
                            class="px-0 w-full h-full text-sm bg-transparent border-transparent placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                            type="text" placeholder="Search" />
                    </form>
                @endif
                <!-- Customer Search Ends -->

                <!-- Customer Action Starts -->
                <div class="flex gap-x-4 justify-between items-center w-full md:w-auto">
                    @if ($count == 1)
                        <div class="flex gap-x-4 items-center">
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <button type="button" class="font-medium bg-white shadow-sm btn dark:bg-slate-800">
                                        <iconify-icon icon="solar:filter-line-duotone" class="text-2xl"></iconify-icon>
                                        <span class="hidden sm:inline-block">Filter</span>
                                        <iconify-icon icon="solar:alt-arrow-down-line-duotone" class="text-2xl">
                                        </iconify-icon>
                                    </button>
                                </div>
                                <div class="dropdown-content w-72 !overflow-visible">
                                    <ul class="p-4 space-y-4 dropdown-list">
                                        <li class="dropdown-list-item">
                                            <h2 class="my-1 text-sm font-medium">Category</h2>
                                            <select class="w-full tom-select" autocomplete="off">
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
                            <button class="font-medium bg-white shadow-sm btn dark:bg-slate-800">
                                <iconify-icon icon="solar:export-line-duotone" class="text-2xl"></iconify-icon>
                                <span class="hidden sm:inline-block">Export</span>
                            </button>
                        </div>

                        <a class="btn btn-primary" wire:click='addpay' role="button">
                            <iconify-icon icon="solar:wad-of-money-line-duotone" class="text-2xl"></iconify-icon>
                            <span class="hidden sm:inline-block">Add Payment</span>
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
                <div class="whitespace-nowrap table-responsive rounded-primary">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="w-[20%] uppercase">Payment #</th>
                                <th class="w-[10%] uppercase">Invoice Id</th>
                                <th class="w-[10%] uppercase">Payment Mode</th>
                                <th class="w-[10%] uppercase">Transaction Id</th>
                                <th class="w-[10%] uppercase">Invoice Status</th>
                                <th class="w-[10%] uppercase">Amount</th>
                                <th class="w-[10%] uppercase">Date</th>
                                <th class="w-[10%] !text-right uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody wire:poll>
                            @foreach ($payment as $item)
                                <tr>
                                    <td>100{{$item->id}}</td>
                                    <td>{{$item->invoice_id}}</td>
                                    <td>{{$item->mode}}</td>
                                    <td>00{{$item->id}}</td>
                                    <td>{{ $item->status}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->created_at->format('d M y')}}</td>

                                    <td>
                                        <div class="flex justify-end">
                                            <div class="dropdown" data-placement="bottom-start">
                                                <div wire:confirm="Are you sure you want to delete?" wire:click='delete({{$item->id}})' class="dropdown-toggle">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone"
                                                        class="text-2xl text-danger-500"></iconify-icon>
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
                <!-- Product Pagination Ends -->
        </div>
        <!-- Product List Ends -->
        @elseif ($count == 2)
            <form wire:submit='savepay'>
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                    <!-- Left side Div Start -->
                    <section class="flex flex-col gap-8 w-full lg:col-span-2">
                        <!-- General  -->
                        <div class="p-6 bg-white shadow-sm rounded-primary dark:bg-slate-800">
                            <h5 class="p-0 m-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Product</h5>
                            <p class="p-0 mb-4 text-sm font-normal text-slate-400">
                                Basic information of your product
                            </p>
                            <div class="py-2">
                                <label class="mb-1 font-medium label label-required" for="name">Amount Recived</label>
                                <input required type="number" wire:model='amoutn'
                                    class="input @error('pname') is-invalid @enderror [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                    id="name" />
                            </div>
                            <div class="py-2">
                                <label for="invoice-date" class="mb-1 font-medium label label-required">Date:</label>
                                <div class="flex flex-col gap-2 items-start w-full sm:items-center md:flex-row">

                                    <input required wire:model='date' id="invoice-date"
                                        class="bg-white input input-date dark:bg-slate-800" type="text"
                                        x-mask="99-99-9999" placeholder="DD-MM-YYYY" />
                                </div>
                            </div>
                            <div class="py-2">
                                <label class="mb-1 font-medium label label-required">Admin Note</label>
                                <textarea wire:model='note' class="textarea text-start @error('pdesc') is-invalid @enderror" rows="5"
                                    placeholder="Write message"></textarea>
                            </div>
                        </div>
                    </section>
                    <!-- Left Side Div End  -->

                    <!-- Right Side Div Start  -->
                    <section class="h-full lg:col-span-1">
                        <!-- Organization -->
                        <div class="sticky top-20 p-6 bg-white shadow rounded-primary dark:bg-slate-800">
                            <h5 class="p-0 m-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Organization</h5>
                            <p class="p-0 mb-4 text-sm font-normal text-slate-400">Better organize your product</p>
                            <div class="flex flex-col gap-4">
                                <div>
                                    <label class="mb-1 font-medium label label-required" for="status">Invoice</label>
                                    <select wire:model.live='invoid' class="select @error('pstat') is-invalid @enderror"
                                        id="status">
                                        <option>Select Invoice</option>

                                        @if (is_null($invoice))
                                        @else
                                            @foreach ($invoice as $invoice)
                                                <option value="{{ $invoice->id }}"> {{$invoice->client->name}} | {{ $invoice->id }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-1 font-medium label label-required" for="status"> Status </label>
                                    <select wire:model='stat' class="select @error('pstat') is-invalid @enderror"
                                        id="status">
                                        <option>Select Status</option>
                                        <option value="unpaid">UnPaid</option>
                                        <option value="partialpaid">Partial Paid</option>
                                        <option value="paid">Paid</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-1 font-medium label label-required" for="status"> Payment Method
                                    </label>
                                    <select wire:model='mode' class="select @error('pstat') is-invalid @enderror"
                                        id="status">
                                        <option>Select A Method</option>
                                        <option value="bank">Bank / UPI</option>
                                        <option value="cash">Cash</option>
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
