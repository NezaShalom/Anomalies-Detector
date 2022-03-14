<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>
        <div class="container space-he">
          <div class="row justift-content-center roba">
              <div class="col-md-7 mt-3">	
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="{{asset('front/assets/img/about-extra-2.svg')}}" alt="inty" class="d-block w-100 img-fluid" />
                      </div>
                  </div>
              </div>
    
          <div class="col-md-4">
              <div class="cont-input">
              <h3 class="reset-title">Gufungura konti</h3>
              <form id="form-register" method="post" action="{{ route('register') }}">
                @csrf
                <div id="form-total">
                        <div class="inner">
                            <div class="form-group pt-4">
                            <label>Nomero y'indangamuntu</label>
                            <input type="text" name="idnum" class="form-control" placeholder="Andika Nomero y'indangamuntu" />
                            @error('idnum')<p class='text-danger'>{{$message}}</p>@enderror
                        </div>
                        </div>
                        <div class="inner">
                            <div class="form-group">
                            <label>Nomero ya telefoni (Rwanda)</label>
                            <input type="text" name="phone" class="form-control" placeholder="Andika Nomero ya telefoni" />
                            </div>
                        </div>
                        <div class="inner">
                            <div class="form-group">
                            <label>Ijambo ry'ibanga</label>
                            <input type="password" name="password" class="form-control" placeholder="Andika Ijambo ry'ibanga" />
                            </div>
                        </div>
                        <div class="inner">
                            <div class="form-group">
                            <label>Subizamo Ijambo ry'ibanga</label>
                            <input type="password" name="password-confirm" class="form-control" placeholder="Subizamo Ijambo ry'ibanga" required/>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Emeza</button>
                </div>
                </form>
              </div>
          </div>
        </div>
        </div>
    </main>

    @include('frontend.layouts.footer')
    @include('frontend.layouts.foot')
</body>
</html>
