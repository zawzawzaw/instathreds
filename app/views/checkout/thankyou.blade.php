@section('content')
<!-- CONTENT -->
<section class="content thankyou">

<div class="container">

	<div class="thankyou-wrap">
		<h1 class="headline">Thank you for your order!</h1>
		<h4 class="ordernumber">Your order number: {{ $order_id }}</h4>
		<p>YOUR ORDER HAS BEEN SUCCESSFUL</p>
		<table>
			<tr>
				<td>
				<a href="{{ route('store.featured') }}" style="color:#ff9210;">{{ HTML::image('images/image-thankyou.png') }}</a>
				<p>
				<a href="{{ route('store.featured') }}" style="color:#ff9210;">CHOOSE<br>
				YOUR NEXT<br>
				TSHIRT DESIGN
				</a>
				</p>
				</td>
                <td>
                <a href="{{ route('shirtbuilder.index') }}" style="color:#ff9210;">{{ HTML::image('images/image-thankyou2.png') }}</a>
                <p>
                <a href="{{ route('shirtbuilder.index') }}" style="color:#0381f4;">
                DRAFT UP<br>
				YOUR NEXT<br>
				CUSTOM DESIGN
				</a>
                </td>
			</tr>	
		</table>
	</div>

</div>
</section>
@endsection