<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>

    @if (isset($menus) && !empty($menus))
        @foreach ($menus as $menu)
            <a href="{{ $menu['route'] }}" class="d-none d-sm-inline-block btn btn-sm {{ $menu['button'] }} shadow-sm">
                <i class="fa {{ $menu['icon'] }} fa-sm text-white-50"></i> {{ $menu['title'] }}
            </a>
        @endforeach
    @endif
</div>