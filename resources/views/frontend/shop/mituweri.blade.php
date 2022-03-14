<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>

    <div class="col-lg-12 col-md-12 col-xs-12 space-he">
        <div class="content-wrapper container">
            <div class="breadcrumbs mt-4">
                <a href="/">Ahabanza</a> / Kwishyura Mituweli
            </div>
            
            <div class="service-header d-flex pt-4">
                <h4 class="service-preview-title mb-4"> Kwishyura Mituweli </h4>
            </div>
            
            <div class="imt mb-3">
                <img src="{{asset('front/assets/img/cc.PNG')}}" alt="inty" class="d-block w-100 img-fluid" />
            </div>

          <div class="">
            <div class="card service-card">
                <div class="card-header incard"><i class="fal fa-file-word fa-lg"></i>
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
                        <form id="mituweriform" action="" method="post">
                        <div class="col-sm-4">
                            <label class="main-label mb-3 font-weight-bold"> Umwirondoro w'usaba serivisi </label>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label class="sub-label"> Igihe ubwishingizi buzamara <span class="text-danger">*</span></label>       
                                    <select name="igihe" class="custom-select" placeholder="Igihe ubwishingizi" style="width: 120px;">
                                        <option selected>2021 - 2022</option>
                                        <option value="1">2022 - 2023</option>
                                    </select>
                                </div>
        
                                <div class="form-group col-md-7">       
                                    <label class="sub-label"> Nomero y'indangamuntu <span class="text-danger">*</span></label>
                                    <input name="idnum" type="text" class="form-control" placeholder="Andika nomero y'irangamuntu" formcontrolname="periodFormControl">    
                                </div>
                            </div>
                        </div>


                    <div class="col-sm-4">
                    <label class="main-label mb-3 font-weight-bold"> Amakuru ajyana n'ubwishingizi </label>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="sub-label"> Amafaranga yo kwishyura <span class="text-danger">*</span></label>
                            <input type="text" name="money" class="form-control" placeholder="Andika amafaranga" formcontrolname="periodFormControl">
                        </div>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
        <div class="mb-3 float-right">
        <div class="buu col mt-3">
            <button type="submit" class="btn btn-info">Hagarika</button>
            <button type="submit" class="btn btn-primary" onclick="Savemt()">Ibikurikira</button>
        </div>
        </div>
        </div>
    </div>


</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')

<script>
    function Savemt() {
        fetch("{{route('mituweri.post')}}", {
          headers: {
            "X-CSRF-Token": $('input[name="_token"]').val()
          },
          method: "post",
          credentials: "same-origin",
          body: new FormData(document.getElementById('mituweriform'))
        }).then(response=>response.json()).then(function(data){
            console.log(data);
        })
    }
    </script>
</body>
</html>
