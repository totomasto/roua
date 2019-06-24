@extends('layout.header')

@section('content')

 <!-- Breadcrumb Area -->
 <div class="bk-breadcrumb-area bg-theme">
    <div class="container">
        <div class="bk-breadcrumb">
            <h2>Departamente si specialitati</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Departamente</li>
            </ul>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Page Content -->
<main id="page-content">

    <!-- Faq Section -->
    <section class="cr-section faq-section bg-white section-padding-lg">
        <div class="container">
            <div class="faq-wrapper">
              

                <div class="row faq-questions">
                        <?php $count = 0; ?>
                        @foreach (session('specialsMeniu') as $department => $specials)
                      
                

                    <div class="col-lg-6 faq-single-questions">

                        <h2 class="faq-single-title" id="{{$department}}">{{$department}} </h2>

                        <div class="cr-accordion-wrap" id="faq-accordion-{{$count}}" role="tablist" aria-multiselectable="false">


                            @foreach ($specials as $special)
                                @if($special == null)
                                <br><br>
                                <ul>    
                                @foreach ($doctors as $doctor)
                                        @if($doctor->departament == $department) 
                                <li><a href="{{url('/profil/'.$doctor->doctor)}}"><h4 style="color: #69AFE5;">{{$doctor->doctor}}</h4></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                                <br><br>
                                    @else 
                                <div class="cr-accordion">
                                <div class="cr-accordion-header" role="tab" id="faq-accordion-{{$count}}-header-{{$count}}">
                                <a class="collapsed" data-toggle="collapse" data-parent="#faq-accordion-{{$count}}" href="#faq-accordion-{{$count}}-content-{{$count}}" aria-expanded="true" aria-controls="faq-accordion-{{$count}}-content-{{$count}}"><h4>{{$special}}</h4></a>
                                </div>
                                <div id="faq-accordion-{{$count}}-content-{{$count}}" data-parent="#faq-accordion-{{$count}}" class="collapse in" role="tabpanel" aria-labelledby="faq-accordion-{{$count}}-header-{{$count}}">
                                    <div class="cr-accordion-body">
                                           <ul>

                                            @foreach ($doctors as $doctor)
                                            @if($doctor->specialitati == $special)
                                            <li><a href="{{url('/profil/'.$doctor->doctor)}}"><h4 style="color: #69AFE5;">{{$doctor->doctor}}</h4></a></li>
                                            @endif
                                               @endforeach
                                            </ul>     
                                    </div>
                                </div>
                            </div>
                            
                                @endif
                            @endforeach 
                        

                          <?php $count++; ?>
                            
                        </div>
                    </div>


                    @endforeach
                   

                </div>
                
            </div>
        </div>
    </section>
    <!--// Faq Section -->

</main>
<!--// Page Content -->






@include('layout.footer')

@stop