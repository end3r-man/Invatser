<div>
    {{-- BEGIN: Error Notification --}}
    <div x-data="error()" x-cloak x-init="init" x-show="show" class="z-[60] absolute top-3 right-3">
        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" class="alert alert-danger w-[340px] absolute top-4 right-0  mr"
            role="alert">
            <iconify-icon class="text-2xl flex-0 text-white" icon="icon-park-solid:error"></iconify-icon>
            <p class="flex-1 text-white font-Inter" x-text="message"></p>
        </div>
    </div>
    {{-- END: Error Notification --}}

    {{-- BEGIN: Warning Notification --}}
    <div x-data="warning()" x-cloak x-init="init" x-show="show" class="z-[60] absolute top-3 right-3">
        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" 
            class="alert alert-warning w-[340px] absolute top-4 right-0  mr" role="alert">
            <iconify-icon class="text-2xl flex-0 text-white" icon="nonicons:error-16"></iconify-icon>
            <p class="flex-1 text-white font-Inter" x-text="message"></p>
        </div>
    </div>
    {{-- END: Warning Notification --}}

    {{-- BEGIN: Success Notification --}}
    <div x-data="success()" x-cloak x-init="init" x-show="show" class="z-[60] absolute top-3 right-3">
        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" 
            class="alert alert-success w-[340px] absolute top-4 right-0  mr" role="alert">
            <iconify-icon class="text-2xl flex-0 text-white" icon="icon-park-outline:success"></iconify-icon>
            <p class="flex-1 text-white font-Inter" x-text="message"></p>
        </div>
    </div>
    {{-- End: Success Notification --}}

    {{-- BEGIN: Info Notification --}}
    <div x-data="info()" x-cloak x-init="init" x-show="show" class="z-[60] absolute top-3 right-3">
        <div x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90" class="alert alert-info w-[340px] absolute top-4 right-0  mr"
            role="alert">
            <iconify-icon class="text-2xl flex-0 text-white" icon="material-symbols:info-outline"></iconify-icon>
            <p class="flex-1 text-white font-Inter" x-text="message"></p>
        </div>
    </div>
    {{-- END: Info Notification --}}

    @push('js')
    <script>
            function error() {
                return {
                    show: false,
                    message: "",

                    init() {
                        window.addEventListener('error', (event) => {
                            this.showMessage(event.detail.title);
                        });
                    },
                    showMessage(title) {
                        this.show = true;
                        this.message = title;
                        setTimeout(() => {
                            this.show = false;
                        }, 1500);
                    }
                };
            }

            function warning() {
                return {
                    show: false,
                    message: "",

                    init() {
                        window.addEventListener('warning', (event) => {
                            this.showMessage(event.detail.title);
                        });
                    },
                    showMessage(title) {
                        this.show = true;
                        this.message = title;
                        setTimeout(() => {
                            this.show = false;
                        }, 1500);
                    }
                };
            }

            function success() {
                return {
                    show: false,
                    message: "",

                    init() {
                        window.addEventListener('success', (event) => {
                            this.showMessage(event.detail.title);
                        });
                    },
                    showMessage(title) {
                        this.show = true;
                        this.message = title;
                        setTimeout(() => {
                            this.show = false;
                        }, 1500);
                    }
                };
            }

            function info() {
                return {
                    show: false,
                    message: "",

                    init() {
                        window.addEventListener('info', (event) => {
                            this.showMessage(event.detail.title);
                        });
                    },
                    showMessage(title) {
                        this.show = true;
                        this.message = title;
                        setTimeout(() => {
                            this.show = false;
                        }, 1500);
                    }
                };
            }
    </script>
    @endpush

</div>