@extends('layout.header')

@section('content')
        <!-- Breadcrumb Area -->
        <div class="bk-breadcrumb-area bg-theme">
            <div class="container">
                <div class="bk-breadcrumb">
                    <h2>Programari</h2>
                    <ul>
                    <li><a href="{{url('/')}}">Acasa</a></li>
                        <li>Programari</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Page Content -->
        <main id="page-content">
        
            <!-- Appointment Box Area -->
            <div class="bk-section appointment-area bg-white section-padding-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            
                            <!-- Appointment Form -->
                            <div class="appointment-box pg-appointment-box">
                                <h3>Cere o <span>programare</span></h3>
                                <p></p>
                                <form action="#" class="appointment-form mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-name">Nume complet(*)</label>
                                            <input type="text" name="appointment-form-name" id="appointment-form-name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-doctorname">Departament investigatie(*)</label>
                                            <select name="appointment-form-doctorname" id="appointment-form-doctorname">
                                                <option value="0" data-display=" ">Selecteaza departament</option>
                                                @foreach (session('specialsMeniu') as $department => $specials)
                                                    <option value="{{$department}}">{{$department}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-birthdate">Data nasterii</label>
                                            <input type="text" name="appointment-form-birthdate" id="appointment-form-birthdate" data-select="datepicker">
                                        </div>
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-gender">Sex</label>
                                            <select name="appointment-form-gender" id="appointment-form-gender">
                                                <option value="0" data-display=" ">Select</option>
                                                <option value="0">Masculin</option>
                                                <option value="1">Feminin</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-email">Email</label>
                                            <input type="email" name="appointment-form-email" id="appointment-form-email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 single-input">
                                            <label for="appointment-form-phone">Telefon</label>
                                            <input type="text" name="appointment-form-phone" id="appointment-form-phone">
                                        </div>
                                        <div class="col-12 single-input text-left">
                                            <input type="submit" value="Solicita programare">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--// Appointment Form -->

                        </div>
                        <div class="col-lg-5 col-12">
                            <img class="pg-appointment-image" src="images/map.png" alt="map image">
                        </div>
                    </div>
                </div>
            </div>
            <!--// Appointment Box Area -->

        </main>
        <!--// Page Content -->

        @include('layout.footer')

        @stop