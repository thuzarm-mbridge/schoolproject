@extends('backend')
@section('content')

                <!-- Material form contact -->
<div class="card" >
	<div class="card-header card-header-success">
        <h4 class="card-title">School Create Form</h4>
    </div>

	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">
		<form class="text-center border border-light p-5" action="{{route('school.update',$school->id)}}" enctype="multipart/form-data" method="post">
				@csrf
				@method('PUT')
	    <!-- Name -->
	    <input type="text" id="scname" name="scname" value="{{$school->scname}}" class="form-control mb-4" placeholder="Name">

	    <!-- Email -->
	    <input type="email" id="scemail" name="scemail" value="{{$school->scemail}}" class="form-control mb-4" placeholder="E-mail">

	    <!-- phone no-->

	    <input type="text" id="scphone" name="scphone" value="{{$school->scphone}}" class="form-control mb-4" placeholder="Phone">
	   

	    <!-- Message -->
	    <div class="form-group">
	        <textarea class="form-control rounded-0" id="scaddress" name="scaddress" rows="2" placeholder="Address" value="{{$school->scaddress}}"></textarea>
	    </div>

	    
        <div class="col-md-10">
	    <input type="file" id="scprofile" name="image" class="form-control mb-50"
	    multiple="" >
	    <img src="/images/{{ $school->scprofile }}" width="100">
        <input type="hidden" name="oldimg" value="{{$school->scprofile}}">
        </div>	

	    <!-- Copy -->
	    

	    <!-- Send button -->
	    <button class="btn btn-success btn-block mt-3" type="submit">Save</button>

        </form>
		</div>

		<div class="col-md-2"></div>

	</div>
  
</div>
<!-- Material form contact -->



           

@endsection
   