@extends('backend')
@section('content')

<div class="card" >
	<div class="card-header card-header-primary">
        <h4 class="card-title">Student Create Form</h4>
    </div>

	<div class="row ">
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<form class="text-center border border-light p-5" action="{{route('student.store')}}" enctype="multipart/form-data" method="post">
				@csrf
	    
		    <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Name">

		    <!-- Email -->
		    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

		    <!-- phone no-->

		    <input type="text" id="phone" name="phone" class="form-control mb-4" placeholder="Phone">
		   

		    <!-- Address -->
		    <div class="form-group">
		        <textarea class="form-control rounded-0" id="address" name="address" rows="2" placeholder="Address"></textarea>
		    </div>

		     <!--Age -->
		    <input type="number" id="age" name="age" class="form-control mb-4" placeholder="Age">

		    <input type="text" id="subject" name="subject" class="form-control mb-4" placeholder="subject">

		    <div class="">
            	<label for="materialSubscriptionFormPasswords">School</label>
            	<select  class="form-control"  name="school_id">
            		@foreach($schools as $school)
            		<option value="{{$school->id}}">
            			{{$school->scname}}
            		</option>
            		@endforeach
                </select>
            </div>

		    <button class="btn btn-primary btn-block mt-3" type="submit">Save</button>

            </form>
		</div>

		<div class="col-md-2"></div>

	</div> 

</div>



           
         
           
@endsection