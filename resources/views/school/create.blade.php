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
			<form class="text-center border border-light p-5" action="{{route('school.store')}}" enctype="multipart/form-data" method="post">
				@csrf
	    
		    <input type="text" id="scname" name="scname" class="form-control mb-4" placeholder="Name">

		    <!-- Email -->
		    <input type="email" id="scemail" name="scemail" class="form-control mb-4" placeholder="E-mail">

		    <!-- phone no-->

		    <input type="text" id="scphone" name="scphone" class="form-control mb-4" placeholder="Phone">
		   

		    <!-- Message -->
		    <div class="form-group">
		        <textarea class="form-control rounded-0" id="scaddress" name="scaddress" rows="2" placeholder="Address"></textarea>
		    </div>

		    <input type="file" id="scprofile" name="image" class="form-control mb-6 mt-3" multiple="" >

		    <button class="btn btn-success btn-block mt-3" type="submit">Save</button>

            </form>
		</div>

		<div class="col-md-2"></div>

	</div> 

</div>
         
@endsection
   