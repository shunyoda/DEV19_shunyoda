
        <style>
        .brandname{
            color:white;
            text-decoration: none;
        }
         </style>
        
         <div class="top-left"><a href="{{ url('/') }}" class="brandname">Energy Baton</div>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                  <div class="top-right links">
                     @auth
                        <a href="{{ url('mypage') }}">マイページ</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                 </form>
                     @else
                        <a href="{{ route('login') }}">{{__('Login')}}</a>
                     @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{__('Register')}}</a>
                        
                     @endif
                       
                     @endauth
                 @endif
            </div>
            
           
            
            
    
    