<div>
    <main x-data="qrcode()" class="container flex-grow p-4 sm:p-6">

        <!-- Product List Ends -->
        {{-- <form>
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-3 heigfull">
                <!-- Left side Div Start -->
                <section class="flex flex-col gap-8 lg:col-span-2 w-full">
                    <!-- General  -->
                    <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                        <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Scan the QR Code On
                            Your Whatsapp Mobile App</h5>
                        <div class="mt-10 h-[340px] flex justify-center items-center">

                            @if ($count == 1)
                                <div x-init="code()" class="sk-bounce">
                                    <div class="sk-bounce-dot bg-primary-500"></div>
                                    <div class="sk-bounce-dot bg-primary-500"></div>
                                </div>
                            @elseif ($count == 2)
                                <img src="{{$qrc}}" alt="wb-qr" class="w-72 h-72 border-[1px] shadow-[0px_0px_20px_-5px] shadow-black">
                            @endif

                            
                        </div>
                        <div class="h-[1px] mt-10 bg-slate-50 mb-5"></div>
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
                                <label class="label label-required mb-1 font-medium" for="status">Invoice</label>
                                <select  class="select @error('pstat') is-invalid @enderror"
                                    id="status">
                                    <option>Select Invoice</option>
                                </select>
                            </div>
                            <div>
                                <label class="label label-required mb-1 font-medium" for="status"> Status </label>
                                <select  class="select @error('pstat') is-invalid @enderror"
                                    id="status">
                                    <option>Select Status</option>
                                    <option value="unpaid">UnPaid</option>
                                    <option value="partialpaid">Partial Paid</option>
                                    <option value="paid">Paid</option>
                                </select>
                            </div>
                            <div>
                                <label class="label label-required mb-1 font-medium" for="status"> Payment Method
                                </label>
                                <select class="select @error('pstat') is-invalid @enderror"
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
        </form> --}}

        <section class="flex flex-col gap-8 lg:col-span-2 w-full">
            <!-- General  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <div class="flex flex-row justify-between">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">Scan the QR Code On
                    Your Whatsapp Mobile App</h5>
                @if ($luser == 2)
                    <button wire:click.prevent='waout' class="btn bg-[#8b5cf6]">Logout</button>
                @endif
                </div>
                <div class="mt-10 h-[340px] flex justify-center items-center">
                    {{-- <h1>{{$luser}}</h1> --}}
                    @if ($luser == 2)
                        <div x-init="code()" class="sk-bounce">
                            <div class="sk-bounce-dot bg-primary-500"></div>
                            <div class="sk-bounce-dot bg-primary-500"></div>
                        </div>
                    @elseif ($luser == 1)
                        <img src="{{$qrc}}" x-init="code()" alt="wb-qr" class="w-72 h-72 border-[1px] shadow-[0px_0px_20px_-5px] shadow-black">
                    @endif

                </div>
                <div class="h-[1px] mt-10 bg-slate-50 mb-5"></div>
            </div>
        </section>

    </main>

    @push('js')
        <script>
            function qrcode() {
                return {

                    gen() {
                        setInterval(() => {
                            try {
                                this.$wire.codeg();
                            } catch (error) {
                                
                            }
                        }, 1200);
                    },
                    code() {
                        setTimeout(() => {
                            this.gen();
                        }, 4000);
                    },
                }
            }
        </script>
    @endpush
</div>