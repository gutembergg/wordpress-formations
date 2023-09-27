<header class="flex items-center dark:bg-slate-800 bg-white py-4 px-6 mx-auto">
  <div class="mr-12">
    <a class="dark:text-white text-black" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
  </div>
    <nav class="flex w-full items-center justify-between dark:text-white text-white font-semibold" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      @if (has_nav_menu('primary_navigation'))
      <div class="">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation', 
          'container' => 'div',
          'container_class' => '',
          'menu_class' => 'nav md:flex w-full gap-x-8', 
          'echo' => false]) !!}

      </div>
    
      @endif

      <div>
        <button class="bg-slate-700 dark:text-white text-black hover:bg-slate-900 p-2 rounded-md">Newsletter</button>
      </div>
    </nav>
 
</header>
