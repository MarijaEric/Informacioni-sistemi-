<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('AP') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Admin Panel') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <p>{{ __('Klijenti') }}</p>
                </a>
                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'klijenti') class="active " @endif>
                            <a href="{{ route('klijenti-novi.dodaj')  }}">
                                <p>{{ __('Dodaj klijenta') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'dashboard') class="" @endif>
                <a href="{{ route('home') }}">
                    <p>{{ __('Zaposleni') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'dashboard') class=" " @endif>
                <a href="{{ route('home') }}">
                    <p>{{ __('Vozila') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'dashboard') class="" @endif>
                <a href="{{ route('home') }}">
                    <p>{{ __('Transport') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'dashboard') class=" " @endif>
                <a href="{{ route('home') }}">
                    <p>{{ __('Narudđbine') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
