<div class="fixed z-20 w-full flex flex-col">
    
            <div class="bg-warning text-white p-4 flex">
        <div class="mx-auto"><b>Please subscribe to</b> <a href="https://t.me/+ZXcw9TjiI1FkN2Rk" target="_blank" style="text-decoration: underline"><b>our Telegram channel</b> </a></div>
    </div>
    
<header class="header" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="{{ route('home') }}">
                <img src="{{ getImage(getFilePath('logoIcon') . '/dark_logo.png') }}" alt="@lang('image')">
            </a>
            <button class="navbar-toggler header-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="hiddenNav"><i class="las la-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-menu ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('user.home') }}">@lang('Dashboard')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://oprimeaccs.com/account/products">@lang('Buy Account')</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://oprimeboost.com">@lang('Boost Account')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.orders') }}">@lang('Order History')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.profile.setting') }}">@lang('Profile')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.change.password') }}">@lang('Change Password')</a>
                    </li>
                    <li class="nav-item d-block">
                        <div class="accounts-buttons d-flex align-items-center">
                            <a href="{{ route('user.logout') }}" class="accounts-buttons__link btn btn--base btn--sm">
                                <i class="fas fa-sign-in-alt"></i> @lang('Logout')
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@push('style')
<style>
    .nav-menu .nav-item:nth-last-child(2){
        padding-right: 30px;
    }
    @media screen and (max-width: 991px) {
        .nav-menu .nav-item:nth-last-child(2){
            padding-right: 0px;
        }
    }
</style>
@endpush
