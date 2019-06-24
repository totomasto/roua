@extends('layout.header')

@section('content')




        <!-- Header Banner -->
        <div class="banner-area banner-slider-active" id="banner">
            
            <!-- Single Slide -->
            <div class="banner-single videoContainer">
                    
                {{-- <div class="overlay"></div>    --}}

                <video autoplay muted loop id="myVideo">
                
                    <source src="{{asset('images/waterdropconv.mp4')}}" type="video/mp4">
                        
                        
                    </video>
                    
                    <div id="overlay">
                            <div class="container">
                                    <div class="banner-text">
                                        <div class="banner-text-single" style="width:800px;">
                                            <h1><span>ROUA Medical Center</span></h1>
                                        </div>
                                        <div class="banner-text-single" style="width:800px;">
                                            <h5><span>Ceea ce individualizează Clinica Roua este accentul pus pe dezvoltarea ramurilor chirurgicale, dotările de excepţie şi, nu în ultimul rând, excelenţa în acordarea serviciilor medicale.</span></h5>
                                        <br>
                                        <a href="appointment.html" class="bk-button bk-button-transparent bk-button-white" ><span>Afla mai multe...</span></a>
                                        </div>
                                       
                                    </div>
                                </div>    
                    </div>
                    
            </div>
           
        
            <!--// Single Slide -->
            
            <!-- Single Slide -->
            <div class="banner-single" style="background-image: url(images/banner/banner-image-1.jpg);">
                <div class="container">
                    <div class="banner-text">
                        <div class="banner-text-single">
                            <h1><span>NEED A DOCTOR? </span></h1>
                        </div>
                        <div class="banner-text-single">
                            <h5><span>Get an appointment today</span></h5>
                        </div>
                        <div class="banner-text-single">
                            <div class="cr-navigation-holder">
                                <button class="banner-navigation-prev"><i class="fa fa-angle-left"></i></button>
                                <button class="banner-navigation-next"><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Single Slide -->

        </div>
        <!--// Header Banner -->

        <!-- Page Content -->
        <main id="page-content">


                <section class="cr-section service-area-services bg-white section-padding-lg">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10 col-12">
                                    <div class="section-title section-title-2 text-center">
                                        <h2>Sanatatea ta, prioritatea noastra </h2>
                                    </div>
                                </div>
                            </div>
        
                            
                            
                            <div class="row justify-content-end">
                                <div class="col-xl-12 col-lg-7">
                                    <div class="row">
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-8 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-monitor"></i></span>
                                                    <h6>Clinica ultramoderna</h6>
                                                </div>
                                                <p>
                                                    Centrul Medical Roua se doreste a fi acel "lucru bun" pe care un grup de medici inimosi il pot oferi retelei medicale private
                                                </p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-8 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-paint"></i></span>
                                                    <h6>Experienta</h6>
                                                </div>
                                                <p>Refurbishments often occur while a business continues to operate. Maycroft has extensive experience in keeping people safe on building sites</p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-8 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-look"></i></span>
                                                    <h6>Echipa de exceptie  </h6>
                                                </div>
                                                <p>Laminate flooring comes in both planks and square tiles. Laminate flooring is constructed with several different layers of various materials.</p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-display2"></i></span>
                                                    <h6>THEME OPTIONS</h6>
                                                </div>
                                                <p>Built True. Built Together. At Abbott, we are passionate about creating rewarding construction experiences for our clients, our design and trade partners, and our team.</p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-headphones"></i></span>
                                                    <h6>GREAT SUPPORT</h6>
                                                </div>
                                                <p>Construction Consultants is a multi faceted provider of construction consultancy services across all sectors of the built environment.</p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->
        
                                        <!-- Signle Service -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-service single-service-2">
                                                <div class="signle-service-head">
                                                    <span><i class="pe-7s-anchor"></i></span>
                                                    <h6>CUSTOMIZABLE FONTS</h6>
                                                </div>
                                                <p>Home Security is a company that has been established in this area for over 24 years. We have extensive experience in the window.</p>
                                            </div>
                                        </div>
                                        <!--// Signle Service -->




                                        <div class="col-lg-4 col-md-6 col-12">
                                                <br><br><br><br>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                                
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12">
                                                
                                        </div>



                                        
                                         <!-- Signle Service -->
                                         <div class="col-lg-8 col-md-6 col-12">
                                            <div class="single-service single-service-2">
                                                       
                                                <div class="signle-service-head">
                                                <br>
                                                <img src="{{asset('images/cas.jpg')}}" alt="Avatar" style="border-radius: 20%; width:200px;" >
                                                    <h3>	&nbsp;	&nbsp; Servicii medicale decontate de CAS</h3>
                                                </div>
                                                <p style="font-size:25px;">
                                                Oferim servicii medicale decontate de CAS <hr><a href="appointment.html" class="bk-button bk-button-transparent " color="black" ><span>Afla mai multe...</span></a>
                                                </p>
                                            </div>
                                            </div>
                                            <!--// Signle Service -->

                                             <!-- Signle Service -->
                                        <div class="col-lg-2 col-md-6 col-12">
                                                
                                            </div>
                                            <!--// Signle Service -->

                                             <!-- Signle Service -->
                                        <div class="col-lg-2 col-md-6 col-12">
                                               
                                            </div>
                                            <!--// Signle Service -->
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>







         

            <!-- Team Member Area -->
            <div class="bk-section team-member-area bg-white section-padding-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10 col-12">
                            <div class="section-title text-center">
                                <h2>CATIVA DINTRE <span>SPECIALISTII NOSTRII</span></h2>
                                <p>Ceea ce individualizează Clinica Roua este accentul pus pe dezvoltarea ramurilor chirurgicale, dotările de excepţie şi, nu în ultimul rând, excelenţa în acordarea serviciilor medicale.</p>
                            </div>
                        </div>
                    </div>

                    <div class="team-member-silder-active slider-navigation-style-1">
                        
                        <!-- Team Member -->
                        <div class="team-member text-center">
                            <img src="images/roua/team/team8.jpg" alt="team member thumb">
                            <h5><a href="doctor-profile.html">Dr. OTILIA RACASAN</a></h5>
                            <span>Chirurgie plastica si reparatorie</span>
                           
                        </div>
                        <!--// Team Member -->
                        
                        <!-- Team Member -->
                        <div class="team-member text-center">
                            <img src="images/roua/team/team9.jpg" alt="team member thumb">
                            <h5><a href="doctor-profile.html">Dr. CARMEN IONICA</a></h5>
                            <span>Chirurgie generala</span>
                            
                        </div>
                        <!--// Team Member -->
                        
                        <!-- Team Member -->
                        <div class="team-member text-center">
                            <img src="images/roua/team/team2.jpg" alt="team member thumb">
                            <h5><a href="doctor-profile.html">Dr. VASILE ORESTA</a></h5>
                            <span>Pediatrie</span>
                           
                        </div>
                        <!--// Team Member -->
                        
                      

                    </div>

                </div>
            </div>
            <!--// Team Member Area -->

            <!-- Call To Action Area -->
            {{-- <div class="bk-section call-to-action-area bg-theme">
                <div class="container">
                    <div class="call-to-action">
                        <div class="call-to-action-text">
                            <h3>Not sure what to do?</h3>
                            <h6>The advice Nurse will help you figure itout</h6>
                        </div>
                        <div class="call-to-action-button">
                            <a href="appointment.html" class="bk-button bk-button-transparent bk-button-white"><span>MAKE AN APPOINTMENT</span></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--// Call To Action Area -->

          

        </main>
        <!--// Page Content -->
        
@include('layout.footer')
@stop