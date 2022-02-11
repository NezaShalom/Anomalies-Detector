<header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
            <a class="navbar-brand" href="/">
            <img src="{{asset('front/assets/img/logo-top.png')}}" width="85" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        @guest
        <li class="nav-item active">
            <a class="btn btn-primary mr-2" href="{{route('frontend.shaka')}}"><i class="fal fa-search"></i> Shaka Dosiye <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary mr-2" href="{{route('frontend.create')}}"><i class="fal fa-user-plus"></i> Iyandikishe</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" href="/login" data-toggle="modal" data-target="#myModal"><i class="far fa-sign-in"></i> Kwinjira</a>
        </li>
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
        </ul>
    </div>
    </div>
    </nav>

        <!--MODAL LOGIN-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="width: 85%;">
                <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0 border-bottom-0">
                    <ul class="nav">
                      <li class="tabs text-muted active"><a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab" style="text-decoration: none; color: black;"> Konti yawe </a></li>
                        <li class="tabs font-weight-bold"><a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab" style="text-decoration: none; color: black;"> Code ya Telefoni </a></li>
                    </ul>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <div class="modal-body p-0">
                <div role="tabpanel">
                  <div class="tab-content">
                    <div class="line mb-3"></div>
                      <div role="tabpanel" class="tab-pane active" id="uploadTab">
                        <div class="d-flex flex-column">
                          <h4 class="login-title" style="font-family: 'Nunito', sans-serif;"><i class="far fa-user"></i> Injira</h4>
                            <form method="POST" action="{{ route('deter') }}">
                              @csrf
                              <div class="form-group text-left">
                                <label for="email">Nomero ya telefoni (Rwanda)</label>
                                <input id="email" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required placeholder="Andika nomero ya Telefoni">
                                @error('mobile_number')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                          
                              <div class="form-group text-left">
                                <label for="password">Ijambo ry'ibanga</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Andika ijambo ry'ibanga">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                            <button type="submit" class="btn btn-dark btn-block btn-round">Injira</button>
                          </form>
                        </div>
                      </div>           

                      <div role="tabpanel" class="tab-pane" id="browseTab">               
                        <div class="d-flex flex-column">
                          <h4 class="login-title" style="font-family: 'Nunito', sans-serif;"><i class="far fa-user"></i> Koresha ubutumwa bwa'Telefoni</h4>
                          <form>
                            @csrf
                            <div class="form-group text-left">
                              <label>Nomero ya telefoni (Rwanda)</label>
                              <input type="text" class="form-control" name="phone_no" id="number" placeholder="(Code) *********">
                            <div id="recaptcha-container"></div>
                              <a href="#" id=getcode class="btn btn-dark btn-sm mt-2">Get Code</a>
                            </div>
                            <div class="form-group text-left">
                              <input type="text" id="codeToVerify" name="getcode" class="form-control" placeholder="Andika code">
                            </div>
                            <button type="button" class="btn btn-dark btn-block btn-round" id="verifPhNum" >Injira</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="modal-footer d-flex justify-content-center">
                  <div class="signup-section">Nta konti ufite? <a href="{{route('frontend.create')}}" class="text-info"> Yifungure.</a></div>
                  <div class="signup-section"> Wibagiwe ijambo ry'ibanga <a data-toggle="modal" href="#" class="text-info"> Kanda aha</a>.</div>
                </div>
            </div>
          </div>
        </div>



            <!--Login by verification 
            <div class="modal modal-child" id="loginModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-modal-parent="#loginModal1">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="width: 85%;">
                  <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <div class="form-title text-left">
                      <img src="{{asset('front/assets/img/logo-top.png')}}" width="85" height="30" alt="">
                    </div>                    
                    <div class="d-flex flex-column">
                      <h4 class="login-title" style="font-family: 'Nunito', sans-serif;"><i class="far fa-user"></i> Koresha ubutumwa bwa'Telefoni</h4>
                      <form>
                        @csrf
                        <div class="form-group text-left">
                          <label>Nomero ya telefoni (Rwanda)</label>
                          <input type="text" class="form-control" name="phone_no" id="number" placeholder="(Code) *********">
                        <div id="recaptcha-container"></div>
                          <a href="#" id=getcode class="btn btn-dark btn-sm mt-2">Get Code</a>
                        </div>
                        <div class="form-group text-left">
                          <input type="text" id="codeToVerify" name="getcode" class="form-control" placeholder="Andika code">
                        </div>
                        <button type="button" class="btn btn-dark btn-block btn-round" id="verifPhNum" >Injira</button>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Nta konti ufite? <a href="{{route('frontend.create')}}" class="text-info"> Yifungure</a>.</div>
                  </div>
              </div>
            </div>
          </div>-->
</header>

  