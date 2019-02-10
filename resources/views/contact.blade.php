@extends('layouts.before_login')

@section('content')
                    <h5 style="text-align: center; padding: 30px 0px;"> Meet the Team</h5>
                        <div class="row text-center">
                        <div class="col-md-3 ok ">
                            <img src="{{asset('images/kishor.png')}}" alt="team-member" class="photo"><br>
                            <p style="margin: 20px;">
                            Kishor Kumar Khadka<br>
                            Designer
                            </p>
                        </div>
                        <div class="col-md-3 ok">
                            <img src="{{asset('images/Pujan1.jpg')}}"  alt="team-member" class="photo">
                            <p style="margin: 20px;">
                            Pujan Chapagain<br>
                            Developer
                            </p>
                        </div>
                        <div class="col-md-3 ok">
                            <img src="{{asset('images/Nischal.png')}}" alt="team-member" class="photo">
                            <p style="margin: 20px;">
                            Nischal Kharel<br>
                            Developer
                            </p>
                        </div>
                        <div class="col-md-3 ok">
                            <img src="{{asset('images/ishan.png')}}" alt="team-member" class="photo">
                            <p style="margin: 20px;">
                            Ishan Dahal<br>
                            Designer
                            </p>
                        </div>
                    </div>
@endsection