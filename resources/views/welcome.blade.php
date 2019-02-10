
        @extends('layouts.before_login')


        @section('content')

        <div class="row">
            <div class="col-md-7">
            <img src="{{asset('images/vect.png')}}" class="main_img">
            </div>
            <div class="sign_up col-md-4"> 
                <div class="lg_txt">Sign Up</div>
                <div style="padding: 2% 15% 0%">
                    <p style="text-align: center;">Welcome to SaagBazar</p>
                    
                    @if (Route::has('login'))
                    
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a class="btn" href="{{ route('login') }}">Login</a>
                    <p style="text-align: center;padding: 10px 0px;">Don't have an account?
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Sign Up</a><br>
                    @endif
                    @endauth
                     @endif
                    </p>

                </div>
                

                
            </div>
            <div class="col-md-1"></div>
        </div>


        @endsection


        

        
