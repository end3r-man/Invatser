<div>
  <div class="content">
    <!-- Main Content Starts -->
    <main class="container flex-grow p-4 sm:p-6">
      <!-- Page Title Starts -->
      <div class="mb-6 flex flex-col justify-between gap-y-1 sm:flex-row sm:gap-y-0">
        <h5>Profile</h5>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="/">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Settings</a>
          </li>
        </ol>
      </div>
      <!-- Page Title Ends -->

      <!-- User Profile Start  -->
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-4">
        <!-- Left Section Start  -->
        <section class="col-span-1 flex h-min w-full flex-col gap-6 lg:sticky lg:top-20">
          <!-- User Avatar & Status  -->
          <div class="card">
            <div class="card-body flex flex-col items-center">
              <div class="relative my-2 h-24 w-24 rounded-full">
                <img src="{{ asset(auth()->user()->profile) }}" alt="avatar-img" id="user-image"
                  class="h-full w-full rounded-full" />
                <label for="upload-avatar"
                  class="absolute bottom-0 right-0 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-slate-50 p-2 dark:bg-slate-900">
                  <span class="text-slate-600 dark:text-slate-300">
                    <i class="w-full" data-feather="camera"></i>
                  </span>
                  <input type="file" accept="image/jpeg, image/png, image/jpg" class="hidden" id="upload-avatar" />
                </label>
              </div>
              <h2 wire:model='name' class="text-[16px] font-medium text-slate-700 dark:text-slate-200">Ahmed Shakil</h2>
              <p class="text-sm font-normal tracking-tight text-slate-400">Fullstack Developer</p>
              <div class="badge badge-soft-success my-3 inline-block px-4">Active</div>
            </div>
          </div>

          <!-- Social Link  -->
          <div class="card">
            <div class="card-body">
              <div class="mb-2 flex items-center justify-between">
                <h3 class="text-[16px] font-semibold text-slate-700 dark:text-slate-200">Social Media</h3>
                <button data-toggle="modal" data-target="#social-link"
                  class="cursor-pointer text-sm text-slate-600 duration-150 ease-in hover:text-primary-500 dark:text-slate-300 dark:hover:text-primary-500">
                  <i class="h-5" data-feather="edit"></i>
                </button>
              </div>
              <!-- Facebook  -->
              <div class="my-3 flex items-center gap-4">
                <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="facebook"></i>
                <div>
                  <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Facebook</h5>
                  <a href="#" class="cursor-not-allowed">
                    <p class="text-sm font-normal text-slate-400">Not connected</p>
                  </a>
                </div>
              </div>
              <!-- Instagram  -->
              <div class="my-3 flex items-center gap-4">
                <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="instagram"></i>
                <div>
                  <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Instagram</h5>
                  <a href="#">
                    <p class="text-sm font-normal text-primary-500">@ahmedshakil</p>
                  </a>
                </div>
              </div>
              <!-- Twitter  -->
              <div class="my-3 flex items-center gap-4">
                <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="twitter"></i>
                <div>
                  <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">Twitter</h5>
                  <a href="#">
                    <p class="text-sm font-normal text-primary-500">@ahmedshakil</p>
                  </a>
                </div>
              </div>
              <!-- LinkedIn  -->
              <div class="my-3 flex items-center gap-4">
                <i class="h-8 text-slate-600 dark:text-slate-300" data-feather="linkedin"></i>
                <div>
                  <h5 class="text-sm font-medium text-slate-700 dark:text-slate-300">LinkedIn</h5>
                  <a href="#">
                    <p class="text-sm font-normal text-primary-500">ahmedshakil</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Left Section End  -->
        <!-- Right Section Start  -->
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
          <!-- Personal Details  -->
          <div class="card">
            <div class="card-body">
              <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Personal Details</h2>
              <p class="mb-4 text-sm font-normal text-slate-400">Manage your personal information</p>
              <form wire:submit.prevent='basic' class="flex flex-col gap-5">
                <!-- Name  -->
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="first-name">
                    <span class="my-1 block">Name</span>
                    <input wire:model='name' type="text" class="input" />
                  </label>
                  <label class="label" for="last-name">
                    <span class="my-1 block">Company Name</span>
                    <input wire:model='company' type="text" class="input" />
                  </label>
                </div>
                <!-- Phone & Email  -->
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="phone">
                    <span class="my-1 block">Phone Number</span>
                    <input wire:model='phone' type="tell"
                      class="input [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                  </label>
                  <label class="label" for="email">
                    <span class="my-1 block">Email</span>
                    <input wire:model='email' type="email" class="input" />
                  </label>
                </div>
                <!-- Street & City  -->
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="street-address">
                    <span class="my-1 block">Street Address</span>
                    <input wire:model='street' type="text" class="input" />
                  </label>
                  <label class="label" for="city-state">
                    <span class="my-1 block">City/State</span>
                    <input wire:model='city' type="text" class="input" />
                  </label>
                </div>
                <!-- Country & Zip  -->
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="country">
                    <span class="my-1 block">Country</span>
                    <select wire:model='country' class="select @error('county') is-invalid @enderror" id="status">
                      <option>Select Country</option>

                      @foreach (App\Enums\country::cases() as $country)
                      <option @if ($country->value == $country)selected @endif value="{{ $country->value }}">{{
                        $country->value }}</option>
                      @endforeach
                    </select>
                  </label>
                  <label class="label" for="zip-code">
                    <span class="my-1 block">Zip Code</span>
                    <input wire:model='zip' type="number"
                      class="input [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                  </label>
                </div>
                <!-- Button  -->
                <div class="flex items-center justify-end gap-4">
                  <button wire:click.prevent='cancle'
                    class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                    Cancel
                  </button>
                  <button type="submit" class="btn bg-[#8b5cf6]">Update</button>
                </div>
              </form>
            </div>
          </div>

          <!-- OTP Box -->

          @if ($obox == 2)
          <div x-data="{ otp: false }" @click.outside="$wire.ocancle()" x-trap.noscroll="open" class="card absolute top-0 left-0 w-full h-screen z-[60] !bg-white/50 !backdrop-blur-sm">
            <div class="w-full h-full flex justify-center items-center">
              <div class="w-1/4 h-60 bg-violet-300">
                <div class="card-body">
                  <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Enter verification code</h2>
                  <p class="mb-4 text-sm font-normal text-slate-400">
                    We Send a Password Reset Code To Mail
                  </p>
                  <form class="flex flex-col gap-5">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-1">
                      <label class="label" for="new-password">
                        <span class="my-1 block">Code</span>
                        <input wire:click.debounce.50ms='upass' type="number" class="input [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                      </label>
                    </div>
                    <!-- Button  -->
                    <div class="flex items-center justify-end gap-4">
                      <button type="cancel" wire:click='ocancle'
                        class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                        Cancel
                      </button>
                      <button type="submit" class="btn btn-primary">Check</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endif
          <!-- Change Password  -->
          <div class="card">
            <div class="card-body">
              <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Change Password</h2>
              <p class="mb-4 text-sm font-normal text-slate-400">
                Protect your account with a strong and secure password
              </p>
              <form wire:submit='passsave' class="flex flex-col gap-5">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="new-password">
                    <span class="my-1 block">New Password</span>
                    <input type="password" class="input" id="new-password" />
                  </label>
                  <label class="label" for="confirm-password">
                    <span class="my-1 block">Confirm Password</span>
                    <input type="password" class="input" id="confirm-password" />
                  </label>
                </div>
                <!-- Button  -->
                <div class="flex items-center justify-end gap-4">
                  <button type="cancel"
                    class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Preferences  -->
          <div class="card">
            <div class="card-body">
              <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Preferences</h2>
              <p class="mb-4 text-sm font-normal text-slate-400">
                Make the most of your experience by customizing your preferences
              </p>
              <form wire:submit.prevent='tcsave' class="flex flex-col gap-5">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                  <label class="label" for="new-password">
                    <span class="my-1 block">Time Zone</span>
                    <select wire:model='timezone' class="select">
                      <option value="1" selected>GMT - 07:00 Pacific Time</option>
                      <option value="2">UTC + 06:00 Dhaka Time</option>
                      <option value="3">UTC + 07:00 Samoa Time</option>
                      <option value="4">UTC + 07:00 Bangkok Time</option>
                      <option value="5">UTC + 06:00 Omsk Time</option>
                      <option value="6">UTC + 06:00 Yangon Time</option>
                      <option value="7">UTC + 05:45 Kathmandu Time</option>
                      <option value="8">UTC + 05:30 Chennai Time</option>
                      <option value="9">UTC + 08:00 Baja California Time</option>
                      <option value="10">UTC + 09:00 Alaska Time</option>
                      <option value="11">UTC + 06:00 Central America Time</option>
                    </select>
                  </label>
                  <label class="label" for="confirm-password">
                    <span class="my-1 block">Currency</span>
                    <select wire:model='currency' class="select">
                      <option>Select Currency</option>
                      <option value="&#x20B9;" selected>INR</option>
                    </select>
                  </label>
                </div>
                <!-- Button  -->
                <div class="flex items-center justify-end gap-4">
                  <button type="cancel" wire:click='cancle'
                    class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                    Cancel
                  </button>
                  <button type="submit" class="btn bg-[#8b5cf6]">Update</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Notification -->
          <div class="card">
            <div class="card-body">
              <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Notification</h2>
              <p class="mb-4 text-sm font-normal text-slate-400">Manage when you receive updates and alerts</p>
              <label for="show-desktop-notification" class="toggle my-2 flex items-center justify-between">
                <div class="label">
                  <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">
                    Show desktop notification
                  </h3>
                  <p class="mb-4 text-sm font-normal text-slate-400">
                    Stay informed and in control with desktop notifications
                  </p>
                </div>
                <div class="relative">
                  <input class="toggle-input peer sr-only" id="show-desktop-notification" type="checkbox" />
                  <div class="toggle-body"></div>
                </div>
              </label>
              <label for="send-email-notification" class="toggle my-2 flex items-center justify-between">
                <div class="label">
                  <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">Send email notification</h3>
                  <p class="mb-4 text-sm font-normal text-slate-400">
                    Stay up-to-date even when you're away from the platform
                  </p>
                </div>
                <div class="relative">
                  <input class="toggle-input peer sr-only" id="send-email-notification" type="checkbox" checked="" />
                  <div class="toggle-body"></div>
                </div>
              </label>
              <label for="show-chat-notification" class="toggle my-2 flex items-center justify-between">
                <div class="label">
                  <h3 class="text-sm font-medium text-slate-700 dark:text-slate-300">Show chat notification</h3>
                  <p class="mb-4 text-sm font-normal text-slate-400">
                    Stay up-to-date even when you're away from the platform
                  </p>
                </div>
                <div class="relative">
                  <input class="toggle-input peer sr-only" id="show-chat-notification" type="checkbox" checked="" />
                  <div class="toggle-body"></div>
                </div>
              </label>
            </div>
          </div>
          <!-- Delete Account -->
          <div class="card">
            <div class="card-body">
              <h2 class="text-[16px] font-semibold text-slate-700 dark:text-slate-300">Delete Account</h2>
              <p class="mb-4 text-sm font-normal text-slate-400">
                Permanently remove your account and data from the platform
              </p>
              <form class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-0">
                <label class="label" for="password">
                  <span class="my-1 block">Confirm Your Password</span>
                  <input type="password" class="input" id="password" />
                </label>
                <div class="flex flex-wrap items-center justify-center md:items-end md:justify-end">
                  <div>
                    <button class="btn btn-danger bg-[#f43f5e] px-6" type="submit">Delete My Account</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- Right Section End -->
      </div>
      <!-- Social Link Modal Box -->
      <div class="modal" id="social-link">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <div class="flex items-center justify-between">
                <h6>Social Media</h6>
                <button type="button"
                  class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                  data-dismiss="modal">
                  <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                </button>
              </div>
            </div>
            <div class="modal-body">
              <form method="post" class="-mt-1.5 flex w-full flex-col space-y-3">
                <div>
                  <label class="label" for="facebook"> Facebook </label>
                  <input type="text" class="input" value="" id="facebook" name="facebook" />
                </div>

                <div>
                  <label class="label" for="instagram"> Instragram </label>
                  <input type="text" class="input" value="https://www.instagram.com/ahmedshakil" name="instagram"
                    id="instagram" />
                </div>

                <div>
                  <label class="label" for="twitter"> Twitter </label>
                  <input type="text" class="input" value="https://twitter.com/ahmedshakil" id="twitter"
                    name="twitter" />
                </div>

                <div>
                  <label class="label" for="linkedin"> LinkedIn </label>
                  <input type="text" class="input" value="https://linkedin.com/ahmedshakil" id="linkedin"
                    name="linkedin" />
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <div class="flex items-center justify-end gap-4">
                <button type="cancel" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- User Profile End  -->
    </main>
    <!-- Main Content Ends -->
  </div>
</div>