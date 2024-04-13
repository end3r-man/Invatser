<div>
    <div id="app" class="flex min-h-screen w-full items-center justify-center">
        <!-- Main Content Starts -->
        <main class="container flex-grow p-4 sm:p-6">
            <div class="card mx-auto w-full max-w-md">
                <div class="card-body px-10 py-12">
                    <div class="flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-4xl w-12 h-12" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M15 16.69V13h1.5v2.82l2.44 1.41l-.75 1.3zm-4.42 3.73L9 22l-1.5-1.5L6 22l-1.5-1.5L3 22V2l1.5 1.5L6 2l1.5 1.5L9 2l1.5 1.5L12 2l1.5 1.5L15 2l1.5 1.5L18 2l1.5 1.5L21 2v9.1a7.001 7.001 0 0 1-9.95 9.85a4.69 4.69 0 0 1-.47-.53m-.86-1.33c-.32-.66-.54-1.36-.65-2.09H6v-2h3.07c.1-.71.31-1.38.61-2H6v-2h5.1c1.27-1.24 3-2 4.9-2H6V7h12v2h-2c1.05 0 2.07.24 3 .68V4.91H5v14.18zM20.85 16c0-2.68-2.18-4.85-4.85-4.85c-1.29 0-2.5.51-3.43 1.42c-.91.93-1.42 2.14-1.42 3.43c0 2.68 2.17 4.85 4.85 4.85c.64 0 1.27-.12 1.86-.35c.58-.26 1.14-.62 1.57-1.07c.45-.43.81-.99 1.07-1.57c.23-.59.35-1.22.35-1.86" />
                        </svg>
                        <h5 class="mt-4">Create Account</h5>
                    </div>
                    <form wire:submit.prevent='save'>
                    <div class="mt-6 flex flex-col gap-5">
                        <!-- Fullname -->
                        @if ($counter == 1)
                        <div>
                            <label class="label mb-1">Full Name</label>
                            <input type="text" wire:model='name' class="input" placeholder="Enter Your Full Name" />
                        </div>
                        <!-- Email -->
                        <div>
                            <label class="label mb-1">Email</label>
                            <input type="email" wire:model='email' class="input" placeholder="Enter Your Email" />
                        </div>
                        <!-- Password -->
                        <div>
                            <label class="label mb-1">Password</label>
                            <input type="password" wire:model='password' class="input" placeholder="Password" />
                        </div>
                        <!-- Confirm Password-->
                        <div>
                            <label class="label mb-1">Confirm Password</label>
                            <input type="password" wire:model='passwordc' class="input" placeholder="Confirm Password" />
                        </div>
                        @elseif ($counter == 2)
                        <div>
                            <label class="label mb-1">Verification Code</label>
                            <input type="number" wire:model='evcode' class="input" placeholder="Enter Verification Code" />
                        </div>
                        @endif
                    </div>
                    <!-- Remember & Forgot-->
                    <div class="mt-2 flex">
                        <div class="flex items-center gap-1.5">
                            <input type="checkbox" wire:model='checkbox'
                                class="h-4 w-4 rounded border-slate-300 bg-transparent text-primary-500 shadow-sm transition-all duration-150 checked:hover:shadow-none focus:ring-0 focus:ring-offset-0 enabled:hover:shadow disabled:cursor-not-allowed disabled:opacity-50 dark:border-slate-600"
                                id="remember-me" />
                            <label for="remember-me" class="label text-slate-400">I accept</label>
                        </div>
                        <a href="#" class="ml-2 text-sm text-primary-500 hover:underline">Terms & Condition</a>
                    </div>
                    <!-- Login Button -->
                    <div class="mt-8">
                        <button class="btn bg-[#8b5cf6] w-full py-2.5" type="submit">Signup</button>
                    </div>
                    </form>
                    <!-- Don't Have An Account -->
                    <div class="mt-4 flex justify-center">
                        <p class="text-sm text-slate-600 dark:text-slate-300">
                            Already have an Account?
                            <a href="{{route('login')}}" wire:navigate class="text-sm text-primary-500 hover:underline">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Ends -->
    </div>
</div>
