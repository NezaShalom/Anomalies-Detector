@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7 d-none-mob">
            <div class="preview-container">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Icyemezo ushaka</h5>
                  </div>
                
                <div class="modal-body step-2">
                    <h6>Ibyerekeye iyi serivisi</h6>
                    <p>Kubona service iyariyo yose kurubuga rwa Irembo bisaba ko ugomba kuba ufite konti, kubatayifite bayifungura.</p>
                
                  <div class="row">
                      <div class="col">
                          <h6><i class="fal fa-house-damage"></i> Yatanzwe na : <span class="provider">MINISITERI</span> </h6>
                      </div>
                      
                      <div class="col">
                        <h6><i class="fal fa-tag"></i> Igiciro : Cyirahinduka</h6> 
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="account">
                <div class="col-sm-9">
                <h4 class="mt-4"><i class="fal fa-user" style="width: 18px; top: -3px; margin-right: 5px;"></i> Injira</h4>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mt-3">
                      <label for="phone">Nomero ya telefoni (Rwanda) <span class="text-danger">*</span></label>
                      <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required maxlength="10" minlength="10" value="{{ old('phone') }}" required placeholder="Andika nomero ya Telefoni">
                      @error('phone')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                
                    <div class="form-group text-left">
                      <label for="password">Ijambo ry'ibanga <span class="text-danger">*</span></label>
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
        </div>
    </div>
</div>
@endsection
