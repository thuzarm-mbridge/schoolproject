@extends('backend')
@section('content')

<!-- Material form contact -->
<div class="card" >
    <div class="card-header card-header-success">
        <h4 class="card-title">Product Editing</h4>
    </div>

    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
        <form class="text-center border border-light p-5" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
        <!-- Name -->
        <input type="text" id="pdname" name="pdname" value="{{$product->pdname}}" class="form-control mb-4" placeholder="Name">
        <!-- Email -->
        <input type="number" id="pdprice" name="pdprice" value="{{$product->pdprice}}" class="form-control mb-4" placeholder="E-mail">
        <!-- Email -->
        <div class="col-md-10">
        <input type="file" id="pdimage" name="image" class="form-control mb-50"
        multiple="" >
        <img src="/images/{{ $product->pdimage }}" width="100">
        <input type="hidden" name="oldimg" value="{{$product->pdimage}}">
        </div>
        <!-- Send button -->
        <button class="btn btn-success btn-block mt-3" type="submit">Save</button>

        </form>
        </div>

        <div class="col-md-2"></div>

    </div>

</div>
<!-- Material form contact -->





@endsection
