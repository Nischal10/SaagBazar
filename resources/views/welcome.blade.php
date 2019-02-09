
        @extends('layouts.before_login')


        @section('content')

        <div class="row">
            <div class="col-md-7"></div>
            <div class="sign_up col-md-4"> 
                <div class="lg_txt">Sign Up</div>
                <div style="padding: 2% 5% 0%">
                    Email or username<br>
                    <input type="text" name="email" class="inp_box"><br>
                    Password<br>
                    <input type="Password" name="pass" class="inp_box"><br>
                    <input type="submit" name="login" class="btn" value="Sign up">
                    <p style="text-align: center;padding: 10px 0px;">Don't have an account?
                    <a href="#">Sign Up</a><br>
                    <div style="padding: 5px 0px; text-align: center;"> Or Sign in with</div>
    
                    </p>

                </div>
                

                
            </div>
            <div class="col-md-1"></div>
        </div>


        @endsection


        

        
