<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')
<body>
@include('frontend.layouts.header')
<main>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="content-wrapper container">
            <div class="breadcrumbs mt-4">
                <a href="/">Ahabanza</a> / Gusaba Indangamuntu
            </div>
            
            <div class="service-header d-flex pt-4">
                <h4 class="service-preview-title mb-4"> Gusaba Indangamuntu </h4>
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
                        <div class="form-group col-md-4">
                            <label class="sub-label"> Umurenge wo kwifotoreza <span class="text-danger">*</span></label>       
                            <select class="custom-select" style="width: 210px;">
                                <option selected>BUGESERA-GASHORA</option>
                                <option value="1">BUGESERA-JURU</option>
                                <option>BUGESERA-NYAMATA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label class="sub-label font-weight-bold"> Aho uzayifatira <span class="text-danger">*</span></label>       
                            <select class="custom-select" style="width: 160px;">
                                <option selected>Bugesera</option>
                                <option value="1">Burera</option>
                                <option>Gakenke</option>
                                <option>Gasabo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="sub-label"> Itariki yo kwifotorezaho <span class="text-danger">*</span></label>       
                            <input placeholder="Select date" type="date" id="example" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="sub-label font-weight-bold"> Amazina <span class="text-danger">*</span></label>       
                            <input placeholder="amazina yawe" type="text" id="amazina" class="form-control">
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        
        <div class="matc mb-3" style="align: right;">
        <div class="buu col mt-3">
            <button type="submit" class="btn btn-info">Hagarika</button>
            <button type="submit" class="btn btn-primary">Ibikurikira</button>
        </div>
        </div>
        </div>
        </div>
    </div>
    

</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')
</body>
</html>
