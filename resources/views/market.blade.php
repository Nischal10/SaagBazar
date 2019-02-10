@extends('layouts.before_login')

@section('content')

<h5 class="pad_20">Vegetables</h5>
<div class="large_cont">
	<div class="row">
		<div class="col-md-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/Cauli.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Cauliflower
				<span style="float: right; color: #F92667"> Nrs. 80</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/brocli.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Broccoli
				<span style="float: right; color: #F92667"> Nrs. 100</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/aalu.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Potato
				<span style="float: right; color: #F92667"> Nrs. 60</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/chilli.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Red Chilli
				<span style="float: right; color: #F92667"> Nrs. 10</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
	</div>
</div>

<h5 class="pad_20">Fruits</h5>
<div class="large_cont">
	<div class="row">
		<div class="col-sm-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/orange.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Oranges
				<span style="float: right; color: #F92667"> Nrs. 90</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/mago.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Mango
				<span style="float: right; color: #F92667"> Nrs. 70</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/grapes.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Grapes
				<span style="float: right; color: #F92667"> Nrs. 100</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="veg_box">
				<div class="img_placeholder" style="border-top: 10px solid white;">
					<img src="{{asset('images/pineapple.png')}}" style="height: auto; width: 180px;">
				</div>
				<p style="padding: 0 10px; margin: 5px auto;">Pineapple
				<span style="float: right; color: #F92667"> Nrs. 200</span>
				</p>
				<input type="number" min="0" max="99" value="0" name="" class="btn_add">
				<a href="">
				<div class="btn_cart">
					Add to Cart
				</div>
				</a>
			</div>
		</div>
	</div>

@endsection