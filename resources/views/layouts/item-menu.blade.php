@foreach ($menuItems as $menuItem)
    <li>
        <a href="{{ url($menuItem['url']) }}" class="navbar-menu__item {{ urlIsActive($menuItem['url']) }}" aria-current="page">{{ $menuItem['name'] }}</a>
    </li>
@endforeach
