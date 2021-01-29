@extends('backend')
@section('content')
               <!-- Material form contact -->
<div class="card" >
	<div class="card-header card-header-success">
        <h4 class="card-title">Product Create Form</h4>
    </div>

	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<form class="text-center border border-light p-5" action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
				@csrf

		    <input type="text" id="pdname" name="pdname" class="form-control mb-4" placeholder="Product Name">

		    <input type="number" id="pdprice" name="pdprice" class="form-control mb-4" placeholder="Product Price">

		    <input type="file" id="pdimage" name="image" class="form-control mb-6 mt-3" multiple="" >

		    <button class="btn btn-success btn-block mt-3" type="submit">Save</button>

            </form>
		</div>

		<div class="col-md-2"></div>

	</div>

</div>

@endsection
