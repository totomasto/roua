@extends('layout.header')

@section('content')
        <!-- Breadcrumb Area -->
        <div class="bk-breadcrumb-area bg-theme">
            <div class="container">
                <div class="bk-breadcrumb">
                    <h2>Contacteaza-ne</h2>
                    <ul>
                        <li><a href="{{url('/')}}">Acasa</a></li>
                        <li>Contacteaza-ne</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Page Content -->
        <main id="page-content">
        
            <div class="bk-section contact-area section-padding-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="contact-leftside">
                                <h3>Pentru informatii puteti completa formularul de mai jos : </h3>
                                <form id="contact-form" action="mail.php" class="contact-form" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <input name="name" type="text" placeholder="Nume complet">
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <input name="email" type="email" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <input name="subject" type="text" placeholder="Subiect">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" id="" cols="10" rows="7" placeholder="Mesaj"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit">
                                                <span>Trimite mesaj <i class="fa fa-angle-right"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-message"></p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-rightside">
                                <h3>Contacteaza-ne</h3>
                                <div class="contact-information">
                                        <p>Ceea ce individualizează Clinica Roua este accentul pus pe dezvoltarea ramurilor chirurgicale, dotările de excepţie şi, nu în ultimul rând, excelenţa în acordarea serviciilor medicale.</p>

                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> Adresa : Strada Principala, Păulești Noi 100265, Prahova                                        </li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="mailto://info@example.com">office@clinicaroua.ro</a></li>
                                        <li><i class="fa fa-phone"></i> <a href="callto://01234567890">+40 799 948 200</a></li>
                                    </ul>
                                    <h5>Program</h5>
                                    <p class="opening-time"><span>Luni - Vineri:</span> 07:30AM - 21:00PM</p>
                                    <p class="opening-time"><span>Sambata - Duminica:</span> 09:00AM - 15:00PM</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!--// Page Content -->

        @include('layout.footer')      
@stop