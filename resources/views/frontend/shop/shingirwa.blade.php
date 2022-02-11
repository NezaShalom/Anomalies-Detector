<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="content-wrapper container">
            <div class="breadcrumbs mt-4">
                <a href="/">Ahabanza</a> / Kwiyandikisha ngo ushyingirwe
            </div>
            
            <div class="service-header d-flex pt-4">
                <h4 class="service-preview-title mb-4"> Kwiyandikisha ngo ushyingirwe </h4>
            </div>
            
            <div class="imt mb-3">
                <img src="{{asset('front/assets/img/cc.PNG')}}" alt="inty" class="d-block w-100 img-fluid" />
            </div>

          <div class="">
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
                      <form id="shingirwaform" action="" method="post">
                        <div class="col-sm-4">
                            <label class="main-label mb-3 font-weight-bold"> Umwirondoro w'usaba serivisi </label>
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <span class="sub-label"> Ubwenegihugu bw'usaba serivisi <span class="text-danger">*</span></label>       
                                    <select name="nationality" class="custom-select" placeholder="Igihe ubwishingizi" style="width: 190px;">
                                        <option selected>Umunyarwanda</option>
                                        <option value="1">Umunyamahanga</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-8">
                                    <label class="sub-label"> Nomero y'indangamuntu <span class="text-danger">*</span></label>
                                    <input name="idnum" type="text" class="form-control" placeholder="Andika nomero y'indangamuntu" formcontrolname="periodFormControl">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card service-card">
                <div class="card-header incard"><i class="fal fa-file-word fa-2x"></i>
                Ibyerekeye ishyingirwa
                </div>
        
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <label class="main-label mb-3 font-weight-bold"> Umwirondoro w'uwo mushakanye <span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="sub-label"> Ubwenegihugu bw'uwo mushakanye <span class="text-danger">*</span></label>       
                                    <select name="partnerid" class="custom-select" style="width: 160px;">
                                        <option selected>Umunyarwanda</option>
                                        <option value="1">Umunyamahanga</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <label class="sub-label"> Spouse's national ID <span class="text-danger">*</span></label>
                                    <input name="spousenational" type="text" class="form-control" placeholder="Andika nomero y'indangamuntu" formcontrolname="periodFormControl">
                                </div>
                            </div>
                            <label class="main-label mb-3 font-weight-bold"> Ibyerekeye Gushyingirwa imbere y'amategeko</label>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="sub-label"> Akarere <span class="text-danger">*</span></label>       
                                    <select name="akarere" class="custom-select" style="width: 160px;">
                                        <option selected>-- Akarere --</option>
                                        <option value="1">Kicukiro</option>
                                        <option>Gasabo</option>
                                        <option>Nyarugenge</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="sub-label"> Akagari <span class="text-danger">*</span></label>       
                                    <select name="akagari" class="custom-select" style="width: 160px;">
                                        <option selected>-- Akagari -- </option>
                                        <option value="Kagarama">Kagarama</option>
                                        <option value="Niboye">Niboye</option>
                                        <option value="Gikondo">Gikondo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="sub-label"> Itariki y'ishyingirwa <span class="text-danger">*</span></label>       
                                    <input name="itariki" placeholder="Select date" type="date" id="example" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        
        <div class="mat-c mb-3" style="align:right";>
        <div class="buu col mt-3">
            <button type="submit" class="btn btn-info">Hagarika</button>
            <button type="submit" class="btn btn-primary" onclick="Saveshi()">Emeza</button>
        </div>
        </div>
        </div>
    </div>


</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')

<script>
    function Saveshi() {
        fetch("{{route('shingirwa.post')}}", {
          headers: {
            "X-CSRF-Token": $('input[name="_token"]').val()
          },
          method: "post",
          credentials: "same-origin",
          body: new FormData(document.getElementById('shingirwaform'))
        }).then(response=>response.json()).then(function(data){
            console.log(data);
        })
    }
</script>
</body>
</html>
