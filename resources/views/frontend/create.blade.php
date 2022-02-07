@extends('layouts.app')
@section('content')
<div>

        <div class="container">
          <div class="row justift-content-center roba">
              <div class="col-md-7 mt-5">	
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="{{asset('front/assets/img/about-extra-2.svg')}}" alt="inty" class="d-block w-100 img-fluid" />
                      </div>
                  </div>
              </div>
    
          <div class="col-md-4">
              <div class="cont-input">
              <h3 class="reset-title">Gufungura konti</h3>
              <form>
                <div class="form-group pt-4">
                   <label>Nomero y'indangamuntu</label>
                   <input type="text" class="form-control is-invalid" maxlength="10" minlength="10" placeholder="Andika Nomero y'indangamuntu" />
                </div>
                <div class="form-group">
                   <label>Nomero ya telefoni (Rwanda)</label>
                   <input type="text" class="form-control" placeholder="Andika Nomero ya telefoni" />
                </div>
                <div class="form-group">
                    <label>Andika umubare wibanga</label>
                    <input type="password" class="form-control" placeholder="Andika ijambo ry'ibanga" />
                 </div>
                <Button type="submit" class="btn btn-primary btn-lg btn-block">Iyandikishe</Button>
             </form>
              </div>
          </div>
      </div>
</div>
@endsection
