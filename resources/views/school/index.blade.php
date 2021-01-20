@extends('backend')
@section('content')

<div class="content">
  <div class="container">
          <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">apartment</i>
                  </div>
                
                  <a href="{{route('school.index')}}"><h3>School <small>Lists</small></h3></a>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons text-success">library_add</i>
                    <a href="{{route('school.create')}}"><h4>Add School</h4></a>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">face</i>
                  </div>
                   
                  <a href="{{route('student.index')}}"><h3>Student <small>Lists</small>
                  </h3></a>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons text-primary">library_add</i>
                    <a href="{{route('student.create')}}"><h4>Add Student</h4></a>
                  </div>
                </div>
              </div>
            </div> 
          </div>
  </div>
</div>
   
<div class="card" >

  <div class="card-header card-header-success bg-success">
    <h4 class="card-title">School Lists</h4>
                  
  </div>
  <div class="card-body table-responsive">
    <table class="table table-hover">
            <thead class="text-primary">
              <th>No</th>
              <th>Profile</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Edit</th>
              <th>Delete</th>
              </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp

                    @foreach($schools as $school)
                      <tr>
                        <td>{{$i++}}</td>
                        <td><img src="/images/{{ $school->scprofile }}" width="100px" height="100px"></td>
                        <td>{{$school->scname}}</td>
                        <td>{{$school->scemail}}</td>
                        <td>{{$school->scphone}}</td>
                        <td>{{$school->scaddress}}</td>
                        <td><a href="{{route('school.edit',$school->id)}}" class=" editbtn btn btn-primary" id="editbutton">Edit</a> </td>
                         <td>
                            <form method="post" action="{{route('school.destroy',$school->id)}}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btnred btn btn-danger" id="deletebutton" onclick="return confirm('Are you sure?')">
                                Delete
                              </button>
                                        
                            </form>
                          </td>
                         
                        </tr>

                      
                      @endforeach
  
                    </tbody>
    </table>
  </div>
</div>
           
           
         
           
@endsection




