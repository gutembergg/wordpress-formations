      <nav class="absolute md:hidden left-0 top-6 w-full items-center justify-between" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        @if (has_nav_menu('primary_navigation'))
        
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'container' => 'div',
            'container_class' => '',
            'menu_class' => 'nav w-full gap-x-8 md:dark:text-white text-black font-semibold', 
            'echo' => false]) !!}
  
       
      
        @endif
      </nav>
   