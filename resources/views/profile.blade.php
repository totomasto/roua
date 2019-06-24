@extends('layout.header')

@section('content')

        <!-- Breadcrumb Area -->
        <div class="bk-breadcrumb-area bg-theme">
            <div class="container">
                <div class="bk-breadcrumb">
                    <h2>PROFIL DOCTOR</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="doctors.html">Doctors</a></li>
                        <li>Profil Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Page Content -->
        <main id="page-content">
		
            <!-- Doctors Profile Area -->
            <div class="bk-section doctors-profile-area bg-white section-padding-lg">
                <div class="container">
                    <div class="row">

                        <!-- Doctors Profile Left Side -->
                        <div class="col-lg-4">
                            <div class="team-member-details">
                                @foreach ($doctor as $doc)
                                    
                                @if($doc->photo_path != 'images/team-member/team-member-1.jpg')
                                <div class="team-member-details-image">
                                <img src="{{asset($doc->photo_path)}}" alt="team member thumb">
                                </div>
                                @endif

                                <div class="team-member-details-content">
                                    <h5>{{$doc->nume}}</h5>
                                <span>{{$doc->department}}</span>
                                    @endforeach
                                  
                                  </div>

                            </div>
                        </div>
                        <!--// Doctors Profile Left Side -->

                        <!-- Doctors Profile Right Side -->
                        <div class="col-lg-8">
                            <h1>Lista preturi</h1>
                            <hr>
                            <div class="doctors-profile-rightside">
                                {{-- <p><b>A physician/doctor in pediatrics is a medical practitioner that works directly with children. Also known as pediatricians, these doctors collaborate with nurses, X-ray technicians, medical assistants, and other doctors (such as emergency room doctors and surgeons) to treat children.</b></p>
                                <p><b>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vel erat vitae lectus dictum lacinia. Sed nec dolor at lacus sagittis ultrices a et lorem. Aliquam fermentum consequat dolor, nec lacinia lectus fermentum ut. In et justo id justo tristique placerat. Nulla facilisi. Maecenas commodo erat in nisi vehicula lobortis in vitae urna. Sed rhoncus mi quis nulla aliquam, vel eleifend purus molestie. Duis eleifend nunc sit amet mi dapibus ornare. Suspendisse vel libero se Maecenas ornare consequat massa ullamcorper dapibus. Aliquam auctor, sapien sit amet accumsan facilisis, enim enim aliquet arcu, tincidunt pellentesque justo turpis id neque. Duis eleifend nunc sit amet mi dapibus ornare. Suspendisse vel libero se. Maecenas tempus leo ac nisi iaculis porta. Sed sapien tortor, aliquet a velit ut, lacinia molestie velit. Maecenas ornare consequat massa ullamcorper dapibus.</b></p>
                                 --}}
                                    @foreach ($specials as $special => $procedures)
                                        
                                    
                                <h2>{{$special}}</h2>
                                 <p>Lista de pret este in scop informativ, preturile pot fii diferite</p>            
                                 <table class="table table-bordered">
                                   <thead>
                                     <tr>
                                       <th>Procedura</th>
                                       <th>Pret</th>
                                       <th>Actiuni</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($procedures as $procedure)
                                           
                                     <tr>
                                     <td><h4>{{$procedure->procedura}}</h4></td>
                                     <td><h4>@isset($procedure->price) {{$procedure->price}} @else {{'Pret-ul nu este disponibil'}} @endisset</h4></td>
                                     <td><a class="btn btn-primary btn-sm" href="{{url('/programare')}}" style="color:white;">Cere o programare</a></td>
                                     </tr>
                                     @endforeach
                                     
                                   </tbody>
                                 </table>
                                 @endforeach

                            </div>
                        </div>
                        <!--// Doctors Profile Right Side -->

                    </div>
                   
                </div>
            </div>
            <!--// Doctors Profile Area -->

        </main>
        <!--// Page Content -->

        @include('layout.footer')


        @stop