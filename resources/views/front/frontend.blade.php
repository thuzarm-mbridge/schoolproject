@extends('fronttemplate')
@section('content')


 <section class="new-banner">
    <img src="../img/banner/neww.jpg" class="w-100 h-20">
  </section>

<section class="mt-5 mb-5">
    <div class="container">
      <div class="section-intro text-center">

        <h2 class="">Our Training School<span style="color: green; font-size: 40px;">Schools</span></h2>
 

      </div>

  <div class="row">
        @foreach($schools as $school)
  <div class="flip-card col-md-3 mt-5">
  <div class="flip-card-inner">
    <div class="flip-card-front col-md-3 col-sm-3">
      <img src="/images/{{ $school->scprofile }}" alt="Avatar" style="width:230px;height:220px;">
    </div>
    <div class="flip-card-back">
        <h5 class="card-title">{{$school->scname}}</h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$school->scphone}}</li>
        <li class="list-group-item">{{$school->scaddress}}</li>
        <li class="list-group-item">{{$school->scemail}}</li>

      </ul>
    </div>
  </div>
</div>
 @endforeach
</div>


    </div>
  </section>

  <section class="mt-5 mb-5">
    <div class="container mb-5">
      <div class="section-intro text-center">
        <h2 class="mt-5 mb-5">Our <span style="color: green; font-size: 40px;">Students</span></h2>

      </div>

   <div class="row" style="">
        @foreach($students as $student)
      <div class="card col-md-3 mb-10 mt-10" style="margin-top: 20px;"align="center">
      <div class="card-body mb-10">
        <h5 class="card-title">{{$student->name}}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$student->phone}}</li>
        <li class="list-group-item">{{$student->email}}</li>
        <li class="list-group-item">{{$student->address}}</li>
        <li class="list-group-item">{{$student->ssname}}</li>
      </ul>

    </div>
        @endforeach
      </div>




    </div>
  </section>


@endsection
