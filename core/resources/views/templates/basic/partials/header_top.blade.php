<div class="fixed z-20 w-full flex flex-col">
    
            <div class="bg-warning text-white p-4 flex">
        <div class="mx-auto"><b>Please subscribe to</b> <a href="https://t.me/+ZXcw9TjiI1FkN2Rk" target="_blank" style="text-decoration: underline"><b>our Telegram channel</b> </a></div>
    </div>
<div class="top-header d-none d-lg-block">
    
    <div class="container">
        <div class="top-header__inner flex-between">
            <a class="navbar-brand logo" href="{{ route('home') }}">
                <img src="{{ getImage(getFilePath('logoIcon') . '/dark_logo.png') }}" alt="@lang('image')">
            </a>
            <div class="search-box style-two w-100">
                <form action="" class="search-form">
                    <input type="text" 
                        class="form--control pill" 
                        name="search" 
                        placeholder="@lang('Search...')" 
                        @if(request()->routeIs('products') || request()->routeIs('category.products')) value="{{ request()->search }}" @endif 
                    >
                    <button type="submit" class="search-box__button">
                        <span class="icon"><i class="las la-search"></i></span>
                    </button> 
                </form>
            </div>
            <div class="account-buttons flex-align gap-3">

                @if($general->multi_language)
                @php
                    $language = App\Models\Language::all();
                @endphp
                    <div class="language-box">
                        <select class="langSel form-control form-select">
                            <option value="">@lang('Select One')</option>
                            @foreach($language as $item)
                            <option value="{{$item->code}}" @if(session('lang') == $item->code) selected  @endif>{{ __($item->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                @auth
                    <a href="{{ route('user.logout') }}" class="btn--account"> 
                        <span class="icon fs-14 me-1"><i class="fas fa-sign-out-alt"></i></span> @lang('Logout')
                    </a>
                @else 
                    <a href="{{ route('user.login') }}" class="btn--account"> 
                        <span class="icon fs-14 me-1"><i class="fas fa-sign-in-alt"></i></span> @lang('Login')
                    </a>
                @endauth

                @auth
                    <a href="{{ route('user.home') }}" class="btn btn--base btn--md"> 
                        <span class="icon fs-14 me-1"><i class="fas fa-home"></i></span> @lang('Dashboard')
                    </a>
                @else 
                    <a href="{{ route('user.register') }}" class="btn btn--base btn--md"> 
                        <span class="icon fs-14 me-1"><i class="fas fa-user-plus"></i></span> @lang('Register')
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
 
@push('script')
    <script>
        (function($) {
            "use strict";
            $('.search-form').on('submit', function(e) {
                e.preventDefault();
                var keyword = $(this).find('input[name=search]').val();
                window.location.href = "{{ route('products') }}?search=" + keyword;
            })
        })(jQuery);
    </script>
@endpush 