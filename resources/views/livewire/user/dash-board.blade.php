<div>
    <main class="container flex-grow p-4 sm:p-6">
        <!-- Page Title Starts -->
        <div class="flex flex-col gap-y-1 justify-between mb-6 sm:flex-row sm:gap-y-0">
            <h5>Analytics</h5>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Analytics</a>
                </li>
            </ol>
        </div>
        <!-- Page Title Ends -->

        <div class="space-y-6">
            <!-- Overview Section Start -->
            <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <!-- Product Views  -->
                <div class="card">
                    <div class="flex gap-4 items-center card-body">
                        <div
                            class="flex flex-shrink-0 justify-center items-center w-12 h-12 bg-opacity-20 rounded-full bg-primary-500 text-primary-500">
                            <iconify-icon class="text-3xl" icon="solar:user-line-duotone"></iconify-icon>
                        </div>
                        <div class="flex flex-col flex-1 gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Total Buyer</p>
                            <div class="flex flex-wrap gap-2 justify-between items-baseline">
                                <h4>{{$percen['cont']}}</h4>
                                <span class="flex items-center text-xs font-medium @if ($percen['per'] <= 20) text-danger-500 @else text-success-500 @endif"><i class="w-3 h-3"
                                        stroke-width="3px" data-feather="arrow-up-right"></i>{{$percen['per']}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Sold  -->
                <div class="card">
                    <div class="flex gap-4 items-center card-body">
                        <div
                            class="flex flex-shrink-0 justify-center items-center w-12 h-12 bg-opacity-20 rounded-full bg-success-500 text-success-500">
                            <iconify-icon class="text-3xl" icon="icon-park-twotone:view-list"></iconify-icon>
                        </div>
                        <div class="flex flex-col flex-1 gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Product Sold</p>
                            <div class="flex flex-wrap gap-2 justify-between items-baseline">
                                <h4>{{Number::currency($mlsale['cont'], 'INR')}}</h4>
                                <span class="flex items-center text-xs font-medium @if ($mlsale['per'] <= 20) text-danger-500 @else text-success-500 @endif">
                                    <i class="w-3 h-3" stroke-width="3px" data-feather="arrow-down-left"></i>
                                    {{$mlsale['per']}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Likes  -->
                <div class="card">
                    <div class="flex gap-4 items-center card-body">
                        <div
                            class="flex flex-shrink-0 justify-center items-center w-12 h-12 bg-opacity-20 rounded-full bg-warning-500 text-warning-500">
                            <i class="text-3xl ti ti-thumb-up"></i>
                        </div>
                        <div class="flex flex-col flex-1 gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Total Likes</p>
                            <div class="flex flex-wrap gap-2 justify-between items-baseline">
                                <h4>46,256</h4>
                                <span class="flex items-center text-xs font-medium text-success-500">
                                    <i class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>
                                    1.2%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Conversation Rate  -->
                <div class="card">
                    <div class="flex gap-4 items-center card-body">
                        <div
                            class="flex flex-shrink-0 justify-center items-center w-12 h-12 bg-opacity-20 rounded-full bg-info-500 text-info-500">
                            <i class="text-3xl ti ti-message-2-cog"></i>
                        </div>
                        <div class="flex flex-col flex-1 gap-1">
                            <p class="text-sm tracking-wide text-slate-500">Conversation</p>
                            <div class="flex flex-wrap gap-2 justify-between items-baseline">
                                <h4>$200,56</h4>
                                <span class="flex items-center text-xs font-medium text-success-500">
                                    <i class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>
                                    3.2%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Overview Section End -->

            <!-- Store Analytics, Active Users, Sales By Location, Top & Most Viewed Product Section Start  -->
            {{-- <section class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                <!-- Store Analytics -->
                <div class="order-1 card md:col-span-2">
                    <div class="card-body">
                        <!-- Chart wrap -->
                        <div id="chart-wrap" class="flex flex-col justify-between">
                            <div class="flex flex-wrap gap-3 justify-between items-center md:gap-0">
                                <!-- Chart Title  -->
                                <h6>Sales Analytics</h6>
                                <!-- Legends  -->
                                <div id="store-analytics-chart-legend" class="flex gap-4 items-center">
                                    <label for="visitors">
                                        <input type="checkbox" id="visitors" class="hidden" checked value="Visitors" />
                                        <div class="flex gap-1 items-center">
                                            <div class="h-[10px] w-[10px] rounded-full bg-primary-500"></div>
                                            <p class="text-sm font-medium text-slate-600 dark:text-slate-300">
                                                Visitors</p>
                                        </div>
                                    </label>

                                    <label for="orders">
                                        <input type="checkbox" id="orders" class="hidden" checked value="Orders" />
                                        <div class="flex gap-1 items-center">
                                            <div class="h-[10px] w-[10px] rounded-full bg-sky-500"></div>
                                            <span
                                                class="text-sm font-medium text-slate-600 dark:text-slate-300">Orders</span>
                                        </div>
                                    </label>
                                </div>
                                <!-- Select By Chart -->
                                <select class="w-full select select-sm md:w-32">
                                    <option value="1">Yearly</option>
                                    <option value="2">Monthly</option>
                                </select>
                            </div>
                            <!-- Chart  -->
                            <div id="store-analytics-chart" class="-mx-4"></div>
                        </div>
                    </div>
                </div>
                <!-- Active Users -->
                <div class="order-3 col-span-1 card xl:order-2">
                    <div class="flex flex-col justify-between items-center card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Active Users</h6>
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <i class="text-lg ti ti-dots-vertical text-slate-500"></i>
                                </div>
                                <div class="dropdown-content w-[160px]">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Action
                                            </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Another
                                                Action </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Chart  -->
                        <div id="active-users-chart" class="w-full"></div>
                    </div>
                </div>
                <!-- Sales By Location  -->
                <div class="order-2 col-span-1 card md:col-span-2 xl:order-3">
                    <div class="flex flex-col gap-4 justify-between h-full card-body">
                        <div class="flex flex-wrap gap-2 justify-between">
                            <h6>Sales By Location</h6>
                            <select class="w-full select select-sm md:w-40">
                                <option value="1">Top Countries</option>
                                <option value="2">New Countries</option>
                            </select>
                        </div>
                        <div class="grid flex-grow grid-cols-1 gap-6 min-h-min md:grid-cols-5">
                            <!-- Sales Location Chart  -->
                            <div id="salesLocationChart" class="col-span-1 min-h-[320px] md:col-span-3"></div>
                            <div class="col-span-1 self-center space-y-8 md:col-span-2">
                                <!-- United States  -->
                                <div class="flex gap-2 items-center">
                                    <span class="w-8 h-5 fi fi-us"></span>
                                    <div class="flex flex-col flex-1 gap-1">
                                        <div class="flex justify-between items-center">
                                            <h6 class="text-sm text-slate-700 dark:text-slate-300">United States
                                            </h6>
                                            <p class="text-sm text-slate-400">50%</p>
                                        </div>
                                        <div class="progress progress-sm" role="progressbar" aria-valuenow="10"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-line">
                                                <div class="progress-line-track">
                                                    <div class="progress-line-thumb" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Australia  -->
                                <div class="flex gap-2 items-center">
                                    <span class="w-8 h-5 fi fi-au"></span>
                                    <div class="flex flex-col flex-1 gap-1">
                                        <div class="flex justify-between items-center">
                                            <h6 class="text-sm text-slate-700 dark:text-slate-300">Australia
                                            </h6>
                                            <p class="text-sm text-slate-400">35%</p>
                                        </div>
                                        <div class="progress progress-success progress-sm" role="progressbar"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-line">
                                                <div class="progress-line-track">
                                                    <div class="progress-line-thumb" style="width: 35%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Brazil  -->
                                <div class="flex gap-2 items-center">
                                    <span class="w-8 h-5 fi fi-br"></span>
                                    <div class="flex flex-col flex-1 gap-1">
                                        <div class="flex justify-between items-center">
                                            <h6 class="text-sm text-slate-700 dark:text-slate-300">Brazil</h6>
                                            <p class="text-sm text-slate-400">22%</p>
                                        </div>
                                        <div class="progress progress-info progress-sm" role="progressbar"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-line">
                                                <div class="progress-line-track">
                                                    <div class="progress-line-thumb" style="width: 22%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Germany  -->
                                <div class="flex gap-2 items-center">
                                    <span class="w-8 h-5 fi fi-de"></span>
                                    <div class="flex flex-col flex-1 gap-1">
                                        <div class="flex justify-between items-center">
                                            <h6 class="text-sm text-slate-700 dark:text-slate-300">Germany</h6>
                                            <p class="text-sm text-slate-400">52%</p>
                                        </div>
                                        <div class="progress progress-warning progress-sm" role="progressbar"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-line">
                                                <div class="progress-line-track">
                                                    <div class="progress-line-thumb" style="width: 52%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Selling & Most Viewed Product  -->
                <div class="order-4 col-span-1 space-y-6">
                    <!-- Top Selling Product  -->
                    <div class="card">
                        <div class="card-body">
                            <div class="flex flex-wrap justify-between items-center">
                                <h6>Top Selling Product</h6>
                                <div class="flex gap-2 items-center">
                                    <label for="top-selling-product-today" class="cursor-pointer">
                                        <input type="radio" name="top-selling-product" id="top-selling-product-today"
                                            class="sr-only peer" checked />
                                        <span
                                            class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Today</span>
                                    </label>
                                    <span class="text-sm text-slate-200 dark:text-slate-600">|</span>
                                    <label for="top-selling-product-month" class="cursor-pointer">
                                        <input type="radio" name="top-selling-product" id="top-selling-product-month"
                                            class="sr-only peer" />
                                        <span
                                            class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Month</span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex gap-4 items-center p-4 mt-4 rounded-primary bg-slate-50 dark:bg-slate-900">
                                <img src="{{ asset('assets/images/product8.png') }} {{ asset('') }}" alt="product-img"
                                    class="p-2 w-20 bg-white rounded-primary dark:bg-slate-800" />
                                <div class="flex flex-col flex-1 gap-1">
                                    <h3 class="text-sm font-semibold">Stylish Sunglass</h3>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">New offer only $26.00
                                    </p>
                                    <div class="flex gap-1 text-xl text-warning-400">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Viewed Product -->
                    <div class="card">
                        <div class="flex flex-col gap-2 card-body">
                            <div class="flex flex-wrap justify-between items-center">
                                <h6>Most Viewed Product</h6>
                                <div class="flex gap-2 items-center">
                                    <label for="most-viewed-product-today" class="cursor-pointer">
                                        <input type="radio" name="most-viewed-product" id="most-viewed-product-today"
                                            class="sr-only peer" checked />
                                        <span
                                            class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Today</span>
                                    </label>
                                    <span class="text-sm text-slate-200 dark:text-slate-600">|</span>
                                    <label for="most-viewed-product-month" class="cursor-pointer">
                                        <input type="radio" name="most-viewed-product" id="most-viewed-product-month"
                                            class="sr-only peer" />
                                        <span
                                            class="text-xs text-slate-600 peer-checked:font-medium peer-checked:text-primary-500 dark:text-slate-400">Month</span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex gap-4 items-center p-4 rounded-primary bg-slate-50 dark:bg-slate-900">
                                <img src="{{ asset('assets/images/product7.png') }}" alt="product-img"
                                    class="p-2 w-20 bg-white rounded-primary dark:bg-slate-800" />
                                <div class="flex flex-col flex-1 gap-1">
                                    <h3 class="text-sm font-semibold">Trending Oz Pro Shoes</h3>
                                    <p class="text-sm text-slate-500 dark:text-slate-400">New offer only $105.00
                                    </p>
                                    <div class="flex gap-1 text-xl text-warning-500">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bx-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Store Analytics, Active Users, Sales By Location, Top & Most Viewed Product Section End  -->

            <!-- Campaign & Source Visited Section Start  -->
            <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- Monthly Campaign State  -->
                <div x-data="{ open: false }" class="card">
                    <div class="flex flex-col h-full card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Sales Analytics</h6>
                            <div class="dropdown bg-white/30 rounded-md" data-placement="bottom-end">
                                <div wire:click='sale' class="dropdown-toggle">
                                    <iconify-icon class="text-2xl" icon="solar:arrow-down-bold"></iconify-icon>
                                </div>
                            </div>
                        </div>
                        <p class="my-1 text-sm text-slate-400">{{ Number::currency($tsales, 'INR')}} Total Sales</p>
                        <div class="mt-auto divide-y dark:divide-slate-600">
                            <!-- Emails  -->
                            @if ($salem == true)
                            @foreach ( $msales as $key => $item)
                                <div class="flex gap-4 items-center py-2">
                                    <div
                                        class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-primary-500 text-primary-500">
                                        <i class="text-3xl ti ti-refresh"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">{{$key}}</h6>
                                        <p class="text-sm text-slate-400">{{ $item['qty'] }}</p>
                                    </div>
                                    <span class="flex items-center ml-auto text-sm font-medium text-success-500"><i
                                            class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>{{ $item['total'] }}</span>
                                </div>
                            @endforeach
                            @else
                            @foreach ( array_slice($msales, 0, 5) as $key => $item)
                                <div class="flex gap-4 items-center py-2">
                                    <div
                                        class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-primary-500 text-primary-500">
                                        <i class="text-3xl ti ti-refresh"></i>
                                    </div>
                                    <div>
                                        <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">{{$key}}</h6>
                                        <p class="text-sm text-slate-400">{{ $item['qty'] }}</p>
                                    </div>
                                    <span class="flex items-center ml-auto text-sm font-medium text-success-500"><i
                                            class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>{{ $item['total'] }}</span>
                                </div>
                            @endforeach
                            @endif
                            
                            {{-- <!-- Opened  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-14 rounded-primary bg-success-500 text-success-500">
                                    <i class="text-3xl ti ti-external-link"></i>
                                </div>
                                <div>
                                    <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Opened
                                    </h6>
                                    <p class="text-sm text-slate-400">12,675</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-success-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>35%</span>
                            </div>

                            <!-- Clicked  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-info-500 text-info-500">
                                    <i class="text-3xl ti ti-hand-click"></i>
                                </div>
                                <div>
                                    <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Clicked
                                    </h6>
                                    <p class="text-sm text-slate-400">6,320</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-danger-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-down-left"></i>10%</span>
                            </div>

                            <!-- Complaints  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-10 min-w-12 rounded-primary bg-warning-500 text-warning-500">
                                    <i class="text-3xl ti ti-message-exclamation"></i>
                                </div>
                                <div>
                                    <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">
                                        Complaints</h6>
                                    <p class="text-sm text-slate-400">575</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-danger-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-down-left"></i>02%</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- Source Visits -->
                <div class="card">
                    <div class="flex flex-col h-full card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Source Visitors</h6>
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <i class="text-lg ti ti-dots-vertical text-slate-500"></i>
                                </div>
                                <div class="dropdown-content w-[160px]">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Actions
                                            </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="dropdown-link"> Another Action
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-slate-400">70.8k Visiters</p>
                        <div class="mt-auto divide-y dark:divide-slate-600">
                            <!-- Social Network -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-success-500 text-success-500">
                                    <i class="text-3xl ti ti-social"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-300">
                                        Social Network
                                    </p>
                                    <p class="text-sm text-slate-400">31.4k</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-danger-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-down-left"></i>20%</span>
                            </div>
                            <!-- Direct Source  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-primary-500 text-primary-500">
                                    <i class="text-3xl ti ti-world-search"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-300">
                                        Direct Source
                                    </p>
                                    <p class="text-sm text-slate-400">1.4k</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-success-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>15%</span>
                            </div>

                            <!-- ADVT  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-12 h-12 bg-opacity-20 min-w-12 rounded-primary bg-warning-500 text-warning-500">
                                    <i class="text-3xl ti ti-social"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">ADVT</h6>
                                    <p class="text-sm text-slate-400">31.2k</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-success-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-up-right"></i>16%</span>
                            </div>

                            <!-- Referrals  -->
                            <div class="flex gap-4 items-center py-2">
                                <div
                                    class="flex justify-center items-center w-14 h-12 bg-opacity-20 rounded-primary bg-info-500 text-info-500">
                                    <i class="text-3xl ti ti-users-group"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h6 class="text-sm font-medium text-slate-600 dark:text-slate-300">Referrals
                                    </h6>
                                    <p class="text-sm text-slate-400">345</p>
                                </div>
                                <span class="flex items-center ml-auto text-sm font-medium text-danger-500"><i
                                        class="w-3 h-3" stroke-width="3px" data-feather="arrow-down-left"></i>08%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Campaign & Source Visited Section End  -->

            <!-- Top Sellers Section start  -->
            <section class="grid grid-cols-1">
                <div class="card">
                    <div class="space-y-2 card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Top Buyer</h6>
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <i class="text-lg ti ti-dots-vertical text-slate-500"></i>
                                </div>
                                <div class="dropdown-content w-[160px]">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Action
                                            </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Another
                                                Action </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Seller Table  -->
                        <div class="table-responsive">
                            <table class="table min-w-[43rem]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Country</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar1.png')}}" class="avatar-img"
                                                        alt="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium whitespace-nowrap">Wade Warren</p>
                                                    <p class="text-xs text-slate-400">Apple Store Online</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">07 August</td>
                                        <td class="whitespace-nowrap">T-shirt</td>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <span class="w-8 h-5 fi fi-ae"></span>
                                                <p class="uppercase whitespace-nowrap">UAE</p>
                                            </div>
                                        </td>
                                        <td>2865</td>
                                        <td>$5.08,876</td>
                                        <td>$27,187</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar2.png') }}" class="avatar-img"
                                                        alt="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium whitespace-nowrap">Afrad Bhuyian</p>
                                                    <p class="text-xs text-slate-400">Acme Corporation</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">25 Mar</td>
                                        <td class="whitespace-nowrap">Earings</td>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <span class="w-8 h-5 fi fi-us"></span>
                                                <p class="uppercase whitespace-nowrap">USA</p>
                                            </div>
                                        </td>
                                        <td>36654</td>
                                        <td>$3.06,867</td>
                                        <td>$23,89</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar3.png') }}" class="avatar-img"
                                                        alt="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium whitespace-nowrap">Robert Fox</p>
                                                    <p class="text-xs text-slate-400">Omega Solutions</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">14 February</td>
                                        <td>1 phone</td>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <span class="w-8 h-5 fi fi-gb"></span>
                                                <p class="uppercase whitespace-nowrap">UK</p>
                                            </div>
                                        </td>
                                        <td>4253</td>
                                        <td>$1.06,657</td>
                                        <td>$56,99</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar4.png') }}" class="avatar-img"
                                                        alt="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium whitespace-nowrap">John William</p>
                                                    <p class="text-xs text-slate-400">Phoenix Electronics</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">17 January</td>
                                        <td>Watches</td>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <span class="w-8 h-5 fi fi-de"></span>
                                                <p class="uppercase whitespace-nowrap">GER</p>
                                            </div>
                                        </td>
                                        <td>3532</td>
                                        <td>$3.54,450</td>
                                        <td>$7,67,657</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <div class="avatar avatar-circle">
                                                    <img src="data:{{ asset('assets/images/png') }}"
                                                        class="avatar-img" alt="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium whitespace-nowrap">Ahmed Imtiaz</p>
                                                    <p class="text-xs text-slate-400">Thunderbolt Inc</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">11 November</td>
                                        <td class="whitespace-nowrap">Shoes</td>
                                        <td>
                                            <div class="flex gap-2 items-center">
                                                <span class="w-8 h-5 fi fi-br"></span>
                                                <p class="uppercase whitespace-nowrap">BRA</p>
                                            </div>
                                        </td>
                                        <td>9076</td>
                                        <td>$9.54,450</td>
                                        <td>$78,01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top Sellers Section End  -->

            <!-- Customer Satisfaction & Top Customers Section Start -->
            <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- Customer Satisfaction  -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Customer Satisfaction</h6>
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <i class="text-lg ti ti-dots-vertical text-slate-500"></i>
                                </div>
                                <div class="dropdown-content w-[160px]">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Action
                                            </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Another
                                                Action </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="my-1 text-sm text-slate-400">9.4k reviews</p>

                        <!-- Performance Score Progress -->
                        <div class="mt-4 flex w-full gap-[6px]">
                            <div class="h-2 w-[40%] rounded-primary bg-primary-500"></div>
                            <div class="h-2 w-[20%] rounded-primary bg-success-500"></div>
                            <div class="h-2 w-[18%] rounded-primary bg-info-500"></div>
                            <div class="h-2 w-[12%] rounded-primary bg-warning-500"></div>
                            <div class="h-2 w-[10%] rounded-primary bg-danger-500"></div>
                        </div>
                        <br />
                        <div class="overflow-x-auto space-y-8">
                            <!-- Excellent -->
                            <div class="grid grid-cols-3 w-full">
                                <div class="flex gap-2 items-center">
                                    <div class="h-[14px] w-[14px] rounded-full border-2 border-primary-500">
                                    </div>
                                    <p class="text-sm font-medium whitespace-nowrap">Excellent</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        3760</p>
                                </div>
                                <div class="flex justify-end items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        40%</p>
                                </div>
                            </div>
                            <!-- Very Good  -->
                            <div class="grid grid-cols-3 w-full">
                                <div class="flex gap-2 items-center">
                                    <div class="h-[14px] w-[14px] rounded-full border-2 border-success-500">
                                    </div>
                                    <p class="text-sm font-medium whitespace-nowrap">Very Good</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        1880</p>
                                </div>
                                <div class="flex justify-end items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        20%</p>
                                </div>
                            </div>
                            <!-- Good  -->
                            <div class="grid grid-cols-3 w-full">
                                <div class="flex gap-2 items-center">
                                    <div class="h-[14px] w-[14px] rounded-full border-2 border-info-500"></div>
                                    <p class="text-sm font-medium whitespace-nowrap">Good</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        1692</p>
                                </div>
                                <div class="flex justify-end items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        18%</p>
                                </div>
                            </div>
                            <!-- Poor  -->
                            <div class="grid grid-cols-3 w-full">
                                <div class="flex gap-2 items-center">
                                    <div class="h-[14px] w-[14px] rounded-full border-2 border-warning-500">
                                    </div>
                                    <p class="text-sm font-medium whitespace-nowrap">Poor</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        1128</p>
                                </div>
                                <div class="flex justify-end items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        12%</p>
                                </div>
                            </div>
                            <!-- Very Poor  -->
                            <div class="grid grid-cols-3 w-full">
                                <div class="flex gap-2 items-center">
                                    <div class="h-[14px] w-[14px] rounded-full border-2 border-danger-500">
                                    </div>
                                    <p class="text-sm font-medium whitespace-nowrap">Very Poor</p>
                                </div>
                                <div class="flex justify-center items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        940</p>
                                </div>
                                <div class="flex justify-end items-center">
                                    <p class="text-sm font-medium whitespace-nowrap text-slate-600 dark:text-slate-400">
                                        10%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Customers  -->
                <div class="card">
                    <div class="flex flex-col gap-2 justify-between h-full card-body">
                        <!-- Header  -->
                        <div class="flex justify-between w-full">
                            <h6>Top Customers</h6>
                            <div class="dropdown" data-placement="bottom-end">
                                <div class="dropdown-toggle">
                                    <i class="text-lg ti ti-dots-vertical text-slate-500"></i>
                                </div>
                                <div class="dropdown-content w-[160px]">
                                    <ul class="dropdown-list">
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Action
                                            </a>
                                        </li>
                                        <li class="dropdown-list-item">
                                            <a href="javascript:void(0)" class="gap-2 dropdown-link"> Another
                                                Action </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Customers Table  -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>
                                            <p class="whitespace-nowrap">Join Date</p>
                                        </th>
                                        <th>
                                            <p class="whitespace-nowrap">Total Order</p>
                                        </th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar1.png') }}" alt="avatar-img"
                                                        class="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium">Ahmed Shakil</p>
                                                    <p class="text-xs font-normal text-slate-400">
                                                        ahmed@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">19 Aug 2022</td>
                                        <td>$20,500</td>
                                        <td>$5,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar2.png') }}" alt="avatar-img"
                                                        class="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium">Mehedi Hasan</p>
                                                    <p class="text-xs font-normal text-slate-400">
                                                        mehedi@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">01 Jan 2022</td>
                                        <td>$18,250</td>
                                        <td>$4,250</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar3.png') }}" alt="avatar-img"
                                                        class="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium">Mirazul Islam</p>
                                                    <p class="text-xs font-normal text-slate-400">
                                                        mirazul@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">07 Feb 2022</td>
                                        <td>$15,250</td>
                                        <td>$4,000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex gap-2">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/avatar4.png') }}" alt="avatar-img"
                                                        class="avatar-img" />
                                                </div>
                                                <div>
                                                    <p class="font-medium">Tanvir Ahmed</p>
                                                    <p class="text-xs font-normal text-slate-400">
                                                        tanvir@example.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap">03 May 2022</td>
                                        <td>$12,650</td>
                                        <td>$3,500</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Customer Satisfaction & Top Customers Section End -->
        </div>
    </main>
</div>