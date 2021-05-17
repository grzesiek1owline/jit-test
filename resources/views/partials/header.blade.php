<header class="banner bg-red-400">
  <a class="brand" href="{{ home_url('/') }}">
    {{ $siteName }}
  </a>

  <button>test</button>

  <nav class="nav-primary bg-red-400">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    @endif
  </nav>
</header>
