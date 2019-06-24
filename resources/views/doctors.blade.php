@extends('layout.header')

@section('content')

  <!-- Page Content -->
  <main id="page-content">

        <!-- Doctors list area -->
        <div class="our-doctors-list-area bg-white section-padding-lg">
            <div class="container">
                <div class="row justify-content-center team-member-wrap">


                        @foreach ($doctors as $doctor)
                        
                    

                    <!-- Team Member -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="team-member is-active text-center">
                        <img src="{{$doctor->photo_path}}" height="250" width="50" alt="team member thumb">
                        <h5><a href="{{url('/profil/'.$doctor->doctor)}}">{{$doctor->doctor}}</a></h5>
                            @foreach (session('depDocs') as $depDoc => $departments)
                                @if($depDoc == $doctor->doctor)
                                @foreach ($departments as $department)
                                <span>{{$department}} </span>
                                    
                                @endforeach
                                @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <!--// Team Member -->
                    
                    @endforeach


                    <div class="col-12">
                        <ul class="bk-pagination text-center mt-5">
                            <li><a href="doctors.html"><<</a></li>
                            <li class="active"><a href="doctors.html">1</a></li>
                            <li><a href="doctors.html">2</a></li>
                            <li><a href="doctors.html">...</a></li>
                            <li><a href="doctors.html">>></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!--// Doctors list area -->

    </main>
    <!--// Page Content -->





@include('layout.footer')

@stop