<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>

    <div class="col-lg-12 col-md-12 col-xs-12 space-he">
        <div class="content-wrapper container">
            <div class="breadcrumbs mt-4">
                <a href="/">Ahabanza</a> / Icyemezo gisimbura indangamuntu
            </div>
            
            <div class="service-header d-flex pt-4">
                <h4 class="service-preview-title mb-4"> Icyemezo gisimbura indangamuntu </h4>
            </div>
            
            <div class="imt mb-3">
                <img src="{{asset('front/assets/img/cc.PNG')}}" alt="inty" class="d-block w-100 img-fluid" />
            </div>

          <div class="">
            @error('temporalyIDmssg')<p class="alert alert-danger d-flex align-items-center font-weight-bold" role="alert">
                <i class="fal fa-exclamation-circle fa-2x"></i>
                     {{$message}}
                </p>
            @enderror
            <div class="card service-card">
                <div class="card-header incard"><i class="fal fa-file-word fa-2x"></i>
                Umwirondoro w'usaba serivisi
                </div>
        
                <div class="card-body">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="fal fa-exclamation-triangle fa-2x"></i>
                        <div class="font-weight-bold">
                            Iyi serivisi ihabwa abanyarwanda gusa
                        </div>
                    </div>
                    <div class="row">
                        <form id="tempoform" action="{{ route('tempoid.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="service_name" value="Icyemezo gisimbura indangamuntu">
                            <div class="col-sm-4">
                                <label class="main-label mb-3 font-weight-bold"> Umwirondoro w'usaba serivisi </label>
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <span class="sub-label"> Ubwenegihugu bw'usaba serivisi <span class="text-danger">*</span></label>       
                                        <select name="nationality" class="custom-select" style="width: 190px;">
                                            <option selected>Umunyarwanda</option>
                                            <option value="1">Umunyamahanga</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label class="sub-label"> Nomero y'indangamuntu yatakaye <span class="text-danger">*</span></label>
                                        <input type="text" name="idnum" class="form-control" placeholder="Andika nomero y'indangamuntu" formcontrolname="periodFormControl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="card service-card">
                        <div class="card-header incard"><i class="fal fa-file-word fa-2x"></i>
                        Ibijyanye no gutunganya dosiye
                        </div>
                
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="main-label mb-3 font-weight-bold"> Ibiro bitunganya dosiye <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label class="sub-label"> Akarere <span class="text-danger">*</span></label>       
                                            <select class="custom-select" placeholder="Hitamo Akarere" style="width: 190px;">
                                                <option selected>Kicukiro</option>
                                                <option value="1">Gasabo</option>
                                                <option value="1">Nyarugenge</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label class="sub-label"> Impamvu usaba serivisi <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Andika impamvu" formcontrolname="periodFormControl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="mb-3 float-right">
                    <div class="col mt-3">
                        <button type="button" class="btn btn-info">Hagarika</button>
                        <button type="submit" class="btn btn-primary">Ibikurikira</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')
</body>
</html>
