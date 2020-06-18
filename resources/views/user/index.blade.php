<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}
		.product{
			padding: 6px 32px;
		}
	</style>
</head>
<body>
	<div class="products">
		@foreach($products as $product)
			<div class="product">
				<h3 style="color: red">{{ $product->id }}</h3>
				<h3>{{ $product->name }}</h3>
				<p>{{ $product->price }}</p>
				<hr/>
			</div>
		@endforeach
	</div>
</body>
</html>