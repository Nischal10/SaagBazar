@extends('layouts.before_login')

@section('content')

<section>
           
            <div id="team">
      
                <div id="team-center">
                    
                    <article class="team-member">
                        <img src="{{asset('images/kishor.png')}}" alt="team-member">
                        <div class="img-footer">
                            <div class="footer-info">
                                <h3>Kishor Kumar Khadka</h3>
                                <h5>Designer</h5>
                                
                            </div>
                        </div>
                        
                    </article>
                        
                    <article class="team-member">
                        <img src="{{asset('images/Pujan1.jpg')}}"  alt="team-member">
                        <div class="img-footer">
                            <div class="footer-info">
                                <h3>Pujan Chapagain</h3>
                                <h5>Fontend-Developer</h5>
                                
                            </div>
                        </div>
                    </article>
                      
                    <article class="team-member">
                        <img src="{{asset('images/Nischal.jpg')}}" alt="team-member">
                        <div class="img-footer">
                            <div class="footer-info">
                                <h3>Nischal Kharel(Groom)</h3>
                                <h5>Backend-developer</h5>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
@endsection