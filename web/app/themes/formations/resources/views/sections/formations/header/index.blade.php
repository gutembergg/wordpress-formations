<header class="flex items-center dark:bg-slate-800 bg-white py-4 px-6 mx-auto">
    <div class="mr-12">
      <a class="dark:text-white text-black" href="{{ home_url('/') }}">
        {!! $siteName !!}
      </a>
    </div>

    <nav 
        class="w-full items-center justify-between" 
        aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
    >

    @if (has_nav_menu('primary_navigation'))
        @include('sections.formations.header.navbar')
        @include('sections.formations.header.navbar-mobile')
    @endif
    </nav>

    <div>
        <button class="bg-slate-700 dark:text-white text-black hover:bg-slate-900 p-2 rounded-md">Newsletter</button>
    </div>

    <div class="md:hidden ml-4">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="w-8 h-8 text-white"
        >
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>          
    </div>

</header>
  

