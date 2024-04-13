<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('/images/logo-small.svg') }}" type="image/svg+xml" />
  <title>{{$title ?? 'Dash'}} - Invatser4</title>
  <meta name="description"
    content="Admin Toolkit is a modern admin dashboard template based on Tailwindcss. It comes with a variety of useful ui components and pre-built pages" />
  {{-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/scss/app.scss') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/app-LMFL3xo1.css') }}">
  @vite('resources/css/app.css')
  
  <script>
    if (
        localStorage.getItem('theme') === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      ) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
  </script>
  @livewireStyles
</head>

<body>

  @livewire('comp.notifi-cation')
  
  <div id="app">
    
    <!-- Sidebar Starts -->
    @livewire('user.comp.nav-bar')
    <!-- Sidebar Ends -->

    <!-- Wrapper Starts -->
    <div class="wrapper">
      <!-- Header Starts -->
      @livewire('user.comp.header-pg')
      <!-- Header Ends -->

      <!-- Page Content Starts -->
      <div class="content">
        <!-- Main Content Starts -->
        {{$slot}}
        <!-- Main Content Ends -->
      </div>
      <!-- Page Content Ends -->
    </div>

    <!-- Search Modal Start -->
    @livewire('user.comp.search-pg')
    <!-- Search Modal Ends -->
  </div>
  
  @stack('js')

  @livewireScripts
  <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
  <script src="{{ asset('build/assets/app-D2jpX1vH.js') }}"></script>
</body>

</html>