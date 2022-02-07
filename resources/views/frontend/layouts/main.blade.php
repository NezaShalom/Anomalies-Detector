<!doctype html>
<html class="no-js" lang="zxx">
@include('frontend.layouts.head')

<body>

      <!--? Preloader Start -->
      <div class="spinner"></div> 
    
      <!-- Preloader Start -->
      @include('frontend.layouts.header')
  
      <main>
            <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
      <div class="container">
  
        <div class="hero-img">
          <img src="{{asset('front/assets/img/hero-img.svg')}}" alt="" class="img-fluid">
        </div>
  
        <div class="hero-info">
          <h1>
            <a class="typewrite disabled text-white" data-period="1500" data-type='[ "Hi, Welcome to IremboGov.", "Murakaza neza." ]'>
              <span class="wrap"></span>
            </a>
          </h1><br>
  
          <form>
            <div class="row">
              <div class="col-lg-8 box">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="form-control" placeholder="Gushakisha serivise" style="font-family: 'Nunito', sans-serif;">
              </div>
            </div>
          </form>
      </div>
    </section>
    <!-- End Hero Section -->

    <br>

  <form class="modal multi-step" id="demo-modal-1">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content kose">
            <div class="row">
                <div class="col-sm-12">
                  <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Icyemezo cy'uko uri ingaragu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body step-2">
                    <h6>Ibyerekeye iyi serivisi</h6>
                    <p>L'Attestation de Célibat est un document officiel qui certifie qu'une personne est célibataire. Ce document peut etre utilisé pour demander des services tels que l'Enregistrement du Mariage, un prêt bancaire, un service d'assurance, etc. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur.</p>
                
                  <div class="row">
                      <div class="col">
                          <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
                          <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINALOC</span> </h6>
                      </div>
                      
                      <div class="col">
                        <h6><i class="fal fa-tag"></i> Igiciro : RWF 500</h6> 
                      </div>
                  </div>
                </div>
            
                <div class="modal-footer border-0">
                  <a type="button" class="btn btn-primary" href="{{route('frontend.ingaragu')}}">Saba</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>

<!--Mituelle-->
<form class="modal multi-step" id="demo-modal-2">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content kose">
          <div class="row">
            <div class="col-sm-12">
            <div class="modal-header border-0">
            <h5 class="modal-title" id="exampleModalLabel">Kwishyura Mituweli</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            
            <div class="modal-body step-1">
              <h6>Ibyerekeye iyi serivisi</h6>
              <p>Iyi serivisi ifasha abanyarwanda kwishyura servisi y'ubwisungane mu kwivuza (Mituweli).</p>
              
              <div class="row">
              <div class="col">
                  <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
                  <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">RSSB</span> </h6>
              </div>
              <div class="col">
                <h6><i class="fal fa-tag"></i>  Igiciro: Kirahinduka</h6> 
            </div>
            </div>
            </div>
            <div class="modal-footer border-0">
              <a type="button" class="btn btn-primary" href="{{route('frontend.mituweri')}}">Saba</a>
            </div>
          </div>
        </div>
        </div>
    </div>
</form>

<form class="modal multi-step" id="demo-modal-3">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content kose">
        <div class="row">
          <div class="col-sm-12">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="exampleModalLabel">Icyemezo cy'uko umuntu ariho</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body step-1">
              <h6>Ibyerekeye iyi serivisi</h6>
              <p>Le Certificat de Vie est un document officiel qui certifie qu'une personne est en vie. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur.</p>
        
              <div class="row">
                  <div class="col">
                      <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
                      <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINALOC</span> </h6>
                  </div>
                  <div class="col">
                    <h6><i class="fal fa-tag"></i> Igiciro: Kirahinduka</h6> 
                  </div>
                  
                    <h6 class="mt-2">Urasabira nde? </h6>
                    <select class="custom-select" style="width: 120px;">
                      <option selected>Ndisabira</option>
                      <option value="1">Umwana</option>
                    </select>
                
              </div>
            </div>
            
            <div class="modal-footer border-0">
              <a type="button" class="btn btn-primary" href="{{route('frontend.ariho')}}">Saba</a>
            </div>
          </div>
      </div>
    </div>
  </div>   
</form>

<form class="modal multi-step" id="demo-modal-4">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content kose">
      <div class="row">
        <div class="col-sm-12">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Icyemezo gisimbura indangamuntu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <div class="modal-body step-1">
          <h6>Ibyerekeye iyi serivisi</h6>
          <p>Icyangombwa gisimbura indangamuntu yatakaye gihabwa abanyarwanda kugirango bagikoreshe by'agateganyo mu gihe bategereje gukorerwa indangamuntu nshya.. Dosiye isaba yoherezwa ku buyobozi bwu2019inzego zu2019ibanze ku rwego rw'umurenge kugirango isuzumwe.</p>
          
          <div class="row">
          <div class="col">
              <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
              <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINALOC</span> </h6>
          </div>
          <div class="col">
            <h6><i class="fal fa-tag"></i>  Igiciro: RWF 500</h6> 
        </div>
        </div>
        </div>
        <div class="modal-footer border-0">
          <a type="button" class="btn btn-primary" href="{{route('frontend.simbura')}}">Saba</a>
        </div>
      </div>
    </div>
    </div>
</div>
</form>

<form class="modal multi-step" id="demo-modal-5">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content kose">
      <div class="row">
        <div class="col-sm-12">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Icyemezo cy'ubupfakazi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <div class="modal-body step-1">
          <h6>Ibyerekeye iyi serivisi</h6>
          <p>Icyemezo cy'Ubupfakazi ni icyemezo cyiriho umukono y'ushinzwe irangamimerere ku murenge. Gihabwa abanyarwanda iyo abo bashakanye bitabye Imana, cyikagaragaza irangamimerere yabo. Dosiye isaba yoherezwa mu buyobozi bw’inzego z'ibanze ku murenge kugirango isuzumwe.</p>
          
          <div class="row">
          <div class="col">
              <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
              <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINALOC</span> </h6>
          </div>
          <div class="col">
            <h6><i class="fal fa-tag"></i>  Igiciro: RWF 1,500</h6> 
        </div>
        </div>
        </div>
        <div class="modal-footer border-0">
          <a type="button" class="btn btn-primary" href="{{route('frontend.partde')}}">Saba</a>
        </div>
      </div>
    </div>
    </div>
</div>
</form>

<form class="modal multi-step" id="demo-modal-6">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content kose">
      <div class="row">
        <div class="col-sm-12">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Gusaba Indangamuntu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <div class="modal-body step-1">
          <h6>Icyemezo cyogusaba Indangamuntu nyarwanda.</h6>
          <div class="row mb-3">
            <div class="col">
              <select class="custom-select mt-3" style="width: 220px;">
                <option selected>Gusaba Indangamuntu</option>
              </select>
            </div>
          </div>
          
          <h6>Ibyerekeye iyi serivisi</h6>
          <p>Iyi servisi ifasha umunyarwanda wese ubyifuza gusaba indangamuntu ubwa mbere. Usaba agomba kuba afite nomero y'ifishi muri NIDA. Udafite nomero y’ifishi agomba kujya kuyisaba umukozi ushinzwe irangamimerere mu murenge yitwaje icyangombwa kimuranga afite. Kubindi bisobanuro: info@nida.gov.rw</p>
          <div class="row">
            <div class="col">
                <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 30</h6>
                <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">NIDA</span> </h6>
            </div>
            <div class="col">
              <h6><i class="fal fa-tag"></i>  Igiciro: RWF 500</h6> 
          </div>
          </div>
  
            <select class="custom-select mt-3" style="width: 140px;">
              <option selected>Ndisabira</option>
            </select>
          
        </div>
        <div class="modal-footer border-0">
          <a type="button" class="btn btn-primary" href="{{route('frontend.sabaid')}}">Saba</a>
        </div>
      </div>
    </div>
    </div>
</div>
</form>

<form class="modal multi-step" id="demo-modal-7">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content kose">
      <div class="row">
        <div class="col-sm-12">
        <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLabel">Serivisi z'ishyingirwa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        
        <div class="modal-body step-1">
          <h6>Hitamo serivisi muri izi zikurikira ubone gusaba.</h6>
          <div class="row mb-4">
            <div class="col">
              <select class="custom-select mt-3" style="width: 270px;">
                <option selected value="">-- Hitamo -- </option>
                <option onclick="myFunction()">Kwiyandikisha ngo ushyingirwe</option>
              </select>
            </div>
          </div>

          <div id="myGus">
            <h6>Ibyerekeye iyi serivisi</h6>
            <p>Kwandikisha ishyingirwa bifasha abanyarwanda n'abanyamahanga baba mu Rwanda kwiyandikisha kugirango bashyingirwe byemewe n'amategeko. Mbere yo gushyingirwa, abashaka gushyingirwa bagomba kwiyandikisha iminsi 21 mbere y'uko bashyingirwa. Iyo ntambogamizi zihari, ishyingirwa riraba, abayobozi b'umurenge baha abashyingiranwe inyandiko y'ishyingirwa.</p>
            <div class="row">
              <div class="col">
                  <h6><i class="fal fa-clock"></i> Igihe dosiye imara : Umunsi 1</h6>
                  <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINALOC</span> </h6>
              </div>
              <div class="col">
                <h6><i class="fal fa-tag"></i>  Igiciro: Kirahinduka</h6> 
            </div>
            </div>
            <h6 class="mt-3">Indi migereka yasabwa (12)</h6>

                <p class="m-0">1. Icyemezo cy'amavuko</p>
                <p class="m-0">2. Icyemezo cy'uko uri ingaragu</p>
                <p class="m-0">3. Icyemezo cy'ubupfakazi</p>
                <p class="m-0">4. Icyemezo cy'ubutane</p>
                <p class="m-0">5. Icyemezo cy'uko uwo mwari mwarashakanye yitabye Imana</p>
                <p class="m-0">6. Icyemezo cyo gushyingirwa cy'uwo mwari mwarashakanye
                <p class="m-0">7. Uwo mwashakanye: Icyemezo cy'amavuko</p>
                <p class="m-0">8. Uwo mwashakanye: Icyemezo cy'uko ari ingaragu</p>
                <p class="m-0">9. Uwo mwashakanye: Icyemezo cy'ubupfakazi</p>
                <p class="m-0">10. Uwo mwashakanye: Icyemezo cy'ubutane</p>
                <p class="m-0">11. Uwo mwashakanye: Icyemezo cy'uko uwo bari barashakanye yitabye Imana</p>
                <p class="m-0">12. Uwo mwashakanye: Icyemezo cyo gushyingirwa cy'uwo bari barashakanye</p>
          </div>
        </div>
        <div class="modal-footer border-0">
          <a type="button" class="btn btn-primary" href="{{route('frontend.shingirwa')}}">Saba</a>
        </div>
      </div>
    </div>
    </div>
</div>
</form>



  <br>

    <!--Services section-->
    <section class="getr" id="getr" data-aos="zoom-in" data-aos-delay="100">
      <div class="container mt-3 mb-4">
        <h2 class="home-title" style="font-family: 'Nunito', sans-serif;">Umuryango</h2>
      </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <div class="ser-items" style="color: black;">
                <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-1" href="#"> Icyemezo cy'uko uringaragu </a></p>
                <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-2" href="{{route('frontend.mituweri')}}"> kwishyura Mituweli </a></p>
                <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-3" href="/#"> Icyemezo cy'uko umuntu ariho </a></p>
            </div>
            </div>
            <div class="col">
              <div class="ser-items">
                <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-7" href="/#"> Serivisi z'ishyingirwa</a></p>
                  <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-6" href="/#"> Gusaba Indangamuntu </a></p>
                    <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-5" href="/#"> Icyemezo cy'ubupfakazi </a></p>
              </div>
            </div>
            <div class="col">
              <div class="ser-items">
                <p><a class="text-da" data-toggle="modal" data-target="#demo-modal-4" href="/#"> Icyemezo gisimbura indangamuntu </a></p>
                <p><a class="text-da" href="/#"> Serivisi z'amavuko </a></p>
                <p><a class="text-da" href="/#"> Uruhushya rwo gutwara abantu </a></p>
              </div>
            </div>
          </div>
        </div>
    </section> 
    <br>
    
    
    
    <script>
      function myFunction() {
        var x= document.getElementById("myGus");
        if (x.style.display=="none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
      </script>
      
        @include('frontend.layouts.footer')
        @include('frontend.layouts.foot')
      </body>
    </html>
    