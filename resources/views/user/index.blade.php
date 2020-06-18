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

		.pagination {
			margin: 8px auto;
			padding: 16px;
			display: flex;
			width: 120px;
			justify-content: space-between;
			border: 1px solid blue;
		}
	</style>
</head>
<body>
	<div class="products">
		@if(count($products) == 0)
			<h1 style="color:blue"> No products in this page</h1>
		@endif
		@foreach($products as $product)
			<div class="product">
				<h3 style="color: red">{{ $product->id }}</h3>
				<h3>{{ $product->name }}</h3>
				<p>{{ $product->price }}</p>
				<hr/>
			</div>
		@endforeach
	</div>
	<div class="pagination">
		<a href="/?page={{$page-1}}">Previous</a>
		<p>{{$page}}</p>
		<a href="/?page={{$page+1}}">Next</a>
	</div>
</body>
</html>