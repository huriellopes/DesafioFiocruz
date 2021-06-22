<li class="nav-item {{ $route && request()->fullUrl() == $route ? 'active' : '' }}">
    <a class="nav-link" href="{!! $route !!}">
        {!! $name !!} {{ $route && request()->fullUrl() == $route ? '<span class="sr-only">(current)</span>' : ''}}
    </a>
</li>
