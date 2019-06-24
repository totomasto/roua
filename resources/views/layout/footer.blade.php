
        <!-- Footer -->
        <div class="footer">

            <!-- Footer Top Area -->
            <div class="footer-top-area bg-theme">	
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="footer-social-icons">
                                
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                               
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="footer-newsletter-form">
                                <h4>Newsletter Roua</h4>
                                <input type="email" placeholder="Email...">
                                <input type="submit" value="Aboneaza-te">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Footer Top Area -->

            <!-- Footer Bottom Area -->
            <div class="footer-bottom-area section-padding-sm" style="background:#DDEAF0;">
                <div class="container">
                    <div class="row widgets footer-widgets">

                        <div class="col-lg-3 col-md-6 col-12" style="color:black;">
                            <div class="single-widget widget-about">
                                <h5 class="widget-title" style="color:black;">Despre noi</h5>
                            <img src="{{asset('images/roua/logo.png')}}" alt="about widget image">
                                {{-- <p style="color:black;">We are a team of designers and developers that create high quality <a href="about-us.html">Readmore...</a></p> --}}
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title" style="color:black;">CAS</h5>
                                <ul>
                                    <li><a href="#" style="color:black;">Termeni si conditii</a></li>
                                    <li><a href="#" style="color:black;">GDPR</a></li>
                                    <li><a href="#" style="color:black;">Chestionar opinie</a></li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12" style="color:black;">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title" style="color:black;">ANPC</h5>
                                <ul>
                                    

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-contact">
                                <h5 class="widget-title" style="color:black;">Contacteaza-ne</h5>
                                <ul>
                                    <li class="address">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        <p style="color:black;">Adresa : Strada Principala, 
                                            Păulești Noi 100265, 
                                            Prahova </p>
                                    </li>
                                    <li class="phone">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                        <p><a href="#" style="color:black;">+40 799 948 200</a></p>
                                    </li>
                                    
                                    <li class="email">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                        <p><a href="#" style="color:black;">office@clinicaroua.ro</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Footer Bottom Area -->

            <!-- Footer Copyright Area -->
            <div class="footer-copyright-area "style="background:#DDEAF0;">
                <div class="container">
                    <div class="footer-copyright text-center" >
                        <p style="color:black;">Copyright © <a href="#" style="color:black;">ROUA Medical Center</a>. Toate drepturile rezervate     <button type="button" data-toggle="modal" data-target="#modalCookie1" id="cookiesTrigger"></button></p>
                    </div>
                </div>
            </div>
            <!--// Footer Copyright Area -->

        </div>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->


    <!-- JS Files -->
    <script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
            if (window.navigator.userAgent.match(/Android/i)||
              window.navigator.userAgent.match(/iPhone/i)) {
             document.getElementById('banner').style.display = 'none';
            }
            else {
                if(document.getElementById('banner'))  document.getElementById('banner').style.display = 'block';
               
            } 
    </script>
    <script>
    
        setTimeout(function(){

            if(!localStorage.getItem('cookieTrigger'))  document.getElementById('cookiesTrigger').click();
               

        }, 3000);

        let acceptCookie = async () => {
            localStorage.setItem('cookieTrigger', true);
        }

    </script>
</body>

</html>






<div class="modal fade" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="notice d-flex justify-content-between align-items-center">
                <div class="cookie-text">Acest site folosește cookie-uri. Continuarea navigării reprezintă acceptul dvs. pentru această folosință. Pentru mai multe detalii privind gestionarea preferințelor privind cookie-uri, vedeți Politica de utillizare cookie-uri</div>
                <div class="buttons d-flex flex-column flex-lg-row">
                  <a href="#topHeader" class="btn btn-primary btn-sm" data-dismiss="modal" onclick="acceptCookie();">Accept</a>
                  <a href="#" class="btn btn-secondary btn-sm" data-dismiss="modal">Afla mai multe...</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



