
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math_Dosman @yield('title')</title>
    <meta name="description" content="@yield('description')">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .font-family-inter {
            font-family: "Inter", sans-serif;
            }
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <style>
        pre{
            background-color: #1f2937;
            border-radius: .375rem;
            color: #e5e7eb;
            font-size: .875em;
            font-weight: 400;
            line-height: 1.7142857;
            margin-bottom: 1.7142857em;
            margin-top: 1.7142857em;
            overflow-x: auto;
            padding-inline-end: 1.1428571em;
            padding-bottom: .8571429em;
            padding-top: .8571429em;
            padding-inline-start: 1.1428571em;
        }
    </style>


</head>

<body class="bg-gradient-to-r from-blue-50 via-indigo-200 to-cyan-50 font-family-inter ">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                @if(isset( Auth::user()->name))
                <ul class="flex items-center justify-between font-bold text-sm text-gray-950 no-underline">
                    <li><a class="hover:text-gray-700 hover:border-b-2 border-indigo-500 hover:py-1 px-1 mr-3" href="{{ url('/admin') }}">dashboard</a></li>
                    <li><a class="hover:text-gray-700 hover:border-b-2 border-indigo-500 hover:py-1 px-1 mr-3" href="#">{{ Auth::user()->name }}</a></li>
                </ul>
                @else
                <ul class="flex items-center justify-between font-bold text-sm text-gray-950 no-underline">
                    <li><a class="hover:text-gray-700 hover:border-b-2 border-indigo-500 hover:py-1 px-1 mr-3" href="{{ url('/admin/login') }}">Login</a></li>
                    <li><a class="hover:text-gray-700 hover:border-b-2 border-indigo-500 hover:py-1 px-1 mr-3" href="#">Register</a></li>
                </ul>
                @endif
            </nav>
{{-- 
            <div class="flex items-center text-lg no-underline text-gray-700 pr-6">
                <a class="" href="https://github.com/amrelsayed" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a class="pl-6" href="https://www.youtube.com/@amr-elsayed" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="pl-6" href="https://twitter.com/_amrelsayed" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="https://www.linkedin.com/in/amr-elsayed" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div> --}}
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-indigo-800 hover:text-indigo-600 text-7xl" href="{{ url('/') }}">
                Math_Dosman
            </a>
            <p class="text-lg text-gray-600 mt-2">
                I Putu Darma Putra
            </p>
        </div>
    </header>
    <!-- Topic Nav -->

    <nav class="bg-gray-600 text-white items-center">
        <div class="container mx-auto px-4 md:flex items-center gap-6">
          <!-- Logo -->
          <div class="flex items-center justify-between md:w-auto w-full">
            <a href="/" class="py-2 px-3 block  hover:bg-gray-700">Math_Dosman</a>
            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
              <button class="mobile-menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g fill="none">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          <!-- Primary Navigation -->
          <div class="hidden md:flex md:flex-row flex-col items-center justify-start md:space-x-1 navigation-menu pb-3 md:pb-0 navigation-menu">
            <a href="{{ url('/') }}" class="py-2 px-3 block  hover:bg-gray-700">Home</a>
            <a href="#" class="py-2 px-3 block  hover:bg-gray-700">About</a>
            <a href="#" class="py-2 px-3 block  hover:bg-gray-700">Contact</a>
            <!-- Dropdown Menu -->
            <div class="relative">
              <button class="dropdown-toggle py-2 px-3 hover:bg-gray-700 flex items-center gap-2 rounded">
                <span class="pointer-events-none">Category</span>
                <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <title>chevron-down</title>
                  <g fill="none">
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </svg>
              </button>
              <div class="dropdown-menu absolute hidden bg-gray-700 text-white rounded-b-lg pb-2 w-48">
                @foreach ($categories as $d)
                <a href="/categories/{{ $d->id }}/{{ $d->slug }}" class="block px-6 py-2  hover:bg-gray-700">{{ $d->title }}</a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </nav>

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-3/4 flex flex-col items-center px-3">
            @yield('content')
        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/4 flex flex-col items-center px-3">

            <div class="w-full bg-white flex flex-col my-4 p-6">
                <p class="pb-2">Subscribe to our newsfeed to get latest updates in your email</p>
                <input class="focus:ring-2 focus:ring-indigo-500 focus:outline-none appearance-none w-full text-sm  text-slate-900 placeholder-slate-400 rounded-md p-2 ring-1 ring-slate-400 shadow-sm" type="text" aria-label="Email Address" placeholder="Email Address...">
                <a href="#" class="w-full bg-indigo-800 text-white font-bold text-sm rounded hover:bg-indigo-700 flex items-center justify-center px-2 py-3 mt-4">
                    Subscribe
                </a>
            </div>

        </aside>

    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="px-3">About Us</a>
                <a href="#" class="px-3">Privacy Policy</a>
                <a href="#" class="px-3">Terms & Conditions</a>
                <a href="#" class="px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; mathdosman {{ date('Y') }}</div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
      // Select all dropdown toggle buttons
      const dropdownToggles = document.querySelectorAll(".dropdown-toggle")
    
      dropdownToggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
          // Find the next sibling element which is the dropdown menu
          const dropdownMenu = toggle.nextElementSibling
    
          // Toggle the 'hidden' class to show or hide the dropdown menu
          if (dropdownMenu.classList.contains("hidden")) {
            // Hide any open dropdown menus before showing the new one
            document.querySelectorAll(".dropdown-menu").forEach((menu) => {
              menu.classList.add("hidden")
            })
    
            dropdownMenu.classList.remove("hidden")
          } else {
            dropdownMenu.classList.add("hidden")
          }
        })
      })
    
      // Optional: Clicking outside of an open dropdown menu closes it
      window.addEventListener("click", (event) => {
        if (!event.target.matches(".dropdown-toggle")) {
          document.querySelectorAll(".dropdown-menu").forEach((menu) => {
            if (!menu.contains(event.target)) {
              menu.classList.add("hidden")
            }
          })
        }
      })
    })
    
    const mobileMenuButton = document.querySelector(".mobile-menu-button")
      const mobileMenu = document.querySelector(".navigation-menu")
    
      mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden")
      })
      </script>
</body>
</html>