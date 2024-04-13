<div>
    <aside class="sidebar" :class="$store.menu.on && 'hidden'">
        <!-- Sidebar Header Starts -->
        <a wire:navigate href="/">
            <div class="sidebar-header">
                <div class="sidebar-logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-4xl w-12 h-12" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M15 16.69V13h1.5v2.82l2.44 1.41l-.75 1.3zm-4.42 3.73L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22V2l1.5 1.5L6 2l1.5 1.5L9 2l1.5 1.5L12 2l1.5 1.5L15 2l1.5 1.5L18 2l1.5 1.5L21 2v9.1a7.001 7.001 0 0 1-9.95 9.85a4.69 4.69 0 0 1-.47-.53m-.86-1.33c-.32-.66-.54-1.36-.65-2.09H6v-2h3.07c.1-.71.31-1.38.61-2H6v-2h5.1c1.27-1.24 3-2 4.9-2H6V7h12v2h-2c1.05 0 2.07.24 3 .68V4.91H5v14.18zM20.85 16c0-2.68-2.18-4.85-4.85-4.85c-1.29 0-2.5.51-3.43 1.42c-.91.93-1.42 2.14-1.42 3.43c0 2.68 2.17 4.85 4.85 4.85c.64 0 1.27-.12 1.86-.35c.58-.26 1.14-.62 1.57-1.07c.45-.43.81-.99 1.07-1.57c.23-.59.35-1.22.35-1.86" />
                    </svg>
                </div>

                <div class="sidebar-logo-text">
                    <h1 class="flex text-xl">
                        <span class="font-bold text-slate-800 dark:text-slate-200"> Inva </span>
                        <span class="font-semibold text-primary-500">tser</span>
                    </h1>

                    <p class="whitespace-nowrap text-xs text-slate-400">Simple &amp; Customizable</p>
                </div>
            </div>
        </a>
        <!-- Sidebar Header Ends -->

        <!-- Sidebar Menu Starts -->
        <ul class="sidebar-content">
            <!-- Dashboard -->
            <li>
                <a wire:navigate href="{{route('dashboard')}}" class="sidebar-menu {{request()->routeIs('user.dash') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:home-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Dashboard</span>

                </a>
            </li>
            {{-- <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:user-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Admin</span>
                </a>
            </li> --}}

            <li>
                <a wire:navigate href="{{route('user.clnt')}}" class="sidebar-menu {{request()->routeIs('user.clnt') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="ph:users-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Client</span>
                </a>
            </li>

            <li>
                <a wire:navigate href="{{route('user.cate')}}" class="sidebar-menu {{request()->routeIs('user.cate') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:bill-list-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Categories</span>
                </a>
            </li>

            {{-- <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="tabler:receipt-tax" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Taxes</span>
                </a>
            </li> --}}

            <li>
                <a wire:navigate href="{{ route('user.prod') }}" class="sidebar-menu {{request()->routeIs('user.prod') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:box-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Products</span>
                </a>
            </li>

            {{-- <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="flowbite:quote-outline" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Quotes</span>
                </a>
            </li> --}}

            <li>
                <a wire:navigate href="{{ route('user.invo') }}"  class="sidebar-menu {{request()->routeIs('user.invo') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:checklist-minimalistic-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Invoices</span>
                </a>
            </li>

            {{-- <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:creative-commons-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Payments Method</span>
                </a>
            </li>

            <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:card-transfer-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Transactions</span>
                </a>
            </li> --}}

            <li>
                <a wire:navigate href="{{ route('user.pay') }}" class="sidebar-menu {{request()->routeIs('user.pay') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:card-2-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Payments</span>
                </a>
            </li>
{{-- 
            <li>
                <a wire:navigate href="./email.html" class="sidebar-menu">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:notes-minimalistic-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Invoice Template</span>
                </a>
            </li> --}}

            <li>
                <a wire:navigate href="{{route('user.wat')}}" class="sidebar-menu {{request()->routeIs('user.wat') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="mdi:whatsapp" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">What's App</span>
                </a>
            </li>

            <li>
                <a wire:navigate href="{{route('user.set')}}" class="sidebar-menu {{request()->routeIs('user.set') ? 'active' : ''}}">
                    <span class="sidebar-menu-icon">
                        <iconify-icon icon="solar:settings-line-duotone" class="font-bold text-2xl"></iconify-icon>
                    </span>
                    <span class="sidebar-menu-text">Settings</span>
                </a>
            </li>
        </ul>
        <!-- Sidebar Menu Ends -->
    </aside>

    
</div>