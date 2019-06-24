<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ROUA Medical Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <!-- <link rel="apple-touch-icon" href="images/icon.png"> -->

    <!-- Google font (font-family: 'Lato', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Google font (font-family: 'Raleway', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- Cusom css -->
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
{{-- Modal styles no big deal  --}}
<style>
.modal-dialog {
  margin-top: 0rem;
  max-width: 100%;
  
  .modal-content {
    border-radius: 0rem;
  }
  
  .buttons {
    .btn {
      margin: 0.2rem;
    }
  }
}


</style>
    <!-- Modernizer js -->
<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

    <!-- <div class="fakeloader"></div> -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        
        <!-- Header -->
        <div class="header sticky-header" id="topHeader">

            <!-- Header Top Area -->
            <div class="header-top-area bg-white">
                <div class="container">
                    <div class="header-top-inner">

                        <ul class="header-support-info">
                            <li><span class="icon"><i class="fa fa-phone"></i></span><a href="#"> +40 799 948 200</a></li>
                            <li><span class="icon"><i class="fa fa-envelope-o"></i></span> <a href="#">office@clinicaroua.ro</a></li>
                        </ul>

                        

                        <form class="header-search" action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Middle Area -->
            <div class="header-middle-area d-none d-lg-block bg-white">
                <div class="container">
                    <div class="header-middle-inner">
                    <a href="{{url('/')}}" class="header-logo">
                    <img src="{{asset('images/roua/logo.png')}}" height="60px" width="250px">
                        </a>
                        
                        <!-- Main Navigation -->
                        <nav class="bk-navigation" style="font-size:50px;">
                            <ul>
                            <li><a href="{{url('/')}}">Clinica Roua</a></li>
                                   
                                
                            <li class="bk-dropdown" ><a href="{{url('/departamente')}}">Departamente si specialitati</a>
                                    <ul>
                                            @foreach (session('specialsMeniu') as $department => $specials)
                                    
                                            <li class="bk-sub-dropdown"><a href="{{url('/departamente')}}">{{$department}}</a><ul>
                                                @foreach ($specials as $special)
                                            <li><a href="#">{{$special}}</a></li>    
                                                @endforeach
                                                </ul>
                                            
                                            </li> 
                                            
                                            @endforeach
{{-- 
                                            <li class="bk-sub-dropdown"><a href="#">Chirurgie generala</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Chirurgie vasculara</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Chirurgie estetica</a>
                                                <ul>
                                                    <li><a href="#">Augumentare mamara</a></li>
                                                    <li><a href="#">Mastopexie</a></li>
                                                    <li><a href="#">Reductie sani</a></li>
                                                    <li><a href="#">Corectie areole si mameloane</a></li>
                                                    <li><a href="#">Operatii estetice</a></li>
                                                    <li><a href="#">Lifting facial</a></li>
                                                    <li><a href="#">Rinoplastie</a></li>
                                                    

                                                </ul>
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Chirurgie plastica</a>
                                                
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Proctologie</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                        
                                            <li class="bk-sub-dropdown"><a href="#">Endoscopie digestiva</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Neurologie</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                            <li class="bk-sub-dropdown"><a href="#">Endocrinologie</a>
                                                <ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Dermatologie</a></li>
                                            <li><a href="#">Urologie</a>
                                        </li>
                                            <li class="bk-sub-dropdown"><a href="#">Cardiologie</a><ul>
                                                <li><a href="#">Specialitate 1 </a></li>
                                                <li><a href="#">Specialitate 2</a></li>
                                                <li><a href="#">Specialitate 3</a></li>
                                            </ul>
                                        </li>
                                            <li><a href="#">Pediatrie</a></li>
                                            <li><a href="#">Homeopatie</a></li>
                                            <li><a href="#">Diabet , Nutritie si Boli Metabolice</a></li>
                                            <li class="bk-sub-dropdown"><a href="#">Medicina estetica</a><ul>
                                                    <li><a href="#">Specialitate 1 </a></li>
                                                    <li><a href="#">Specialitate 2</a></li>
                                                    <li><a href="#">Specialitate 3</a></li>
                                                </ul>
                                            </li> --}}


                                    </ul>
                                </li>
                            <li  class="bk-dropdown"><a href="{{url('/echipa')}}">Echipa de medici</a>
                                <ul>
                                    @foreach (session('doctorsMeniu') as $department => $doctors)
                                    
                                    <li class="bk-sub-dropdown"><a href="#">{{$department}}</a><ul>
                                        @foreach ($doctors as $doctor)
                                    <li><a href="{{url('/profil/'.$doctor)}}">{{$doctor}}</a></li>    
                                        @endforeach
                                        </ul>
                                    
                                    </li>
                                    
                                    @endforeach
                                        {{-- <li class="bk-sub-dropdown"><a href="#">Dr. Otilia Racasan</a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. Carmen Ionica</a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. Dascalu Alice</a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. Vasile Oresta</a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. Popa Bogdan</a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. Bozgan-Elena Cristina</a></li> --}}
                                        {{-- <li class="bk-sub-dropdown"><a href="#">Dr. </a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. </a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. </a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. </a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. </a></li>
                                        <li class="bk-sub-dropdown"><a href="#">Dr. </a></li> --}}

                                        
                                </ul>
                            
                            </li>

                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!--// Main Navigation -->

                    </div>
                </div>
            </div>
            <!--// Header Middle Area -->

            <!-- Mobile Menu Wrapper -->
            <div class="mobile-menu-wrapper">
                <div class="container">
                    <div class="mobile-menu d-block d-lg-none">
                        <a href="index.html" class="logo">
                            <img src="images/roua/logo.png" alt="logo theme">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Mobile Menu Wrapper -->

            <!-- Header Bottom Area -->
            <div class="header-bottom-area bg-grey">
                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <div class="col-xl-9 col-lg-8">
                            <ul class="header-info">
                                <li>
                                    <span class="icon">
                                        <i class="fa fa-home"></i>
                                    </span>
                                    <p>Adresa : Strada Principala,
                                         <br>  Păulești Noi 100265, 
                                         <br>  
                                             Prahova</p>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                    <p>Program <br> Luni - Vineri 07.30  - 21.00 <br>Sambata - Duminica 09.00  - 15.00</p>
                                    
                                </li>
                            </ul>
                        </div>

                        <div class="col-xl-3 col-lg-4 text-right">
                        <a href="{{url('/programare')}}" class="header-appointment-button">
                                <span class="icon">
                                    <i class="fa fa-calendar-o"></i>
                                </span>
                                <h5> Cere o programare <span>online</span></h5>
                            </a>
                        </div>
                        {{-- <div class="col-xl-3 col-lg-4 text-right">
                                <a href="appointment.html" class="header-appointment-button">
                                    <span class="icon">
                                        <i class="fa fa-calendar-o"></i>
                                    </span>
                                    <h5> Cere o programare <span>online</span></h5>
                                </a>
                            </div> --}}

                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

        </div>
        <!--// Header -->










        @yield('content')