<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>

    
    <div class="col-lg-12 col-md-12 col-xs-12 space-he">
        <div class="content-wrapper container">
            <div class="breadcrumbs mt-4">
                <a href="/">Ahabanza</a> / Icyemezo cy'ubupfakazi
            </div>
            
            <div class="service-header d-flex pt-4">
                <h4 class="service-preview-title mb-4"> Icyemezo cy'ubupfakazi </h4>
            </div>
            
            <div class="imt mb-3">
                <img src="{{asset('front/assets/img/cc.PNG')}}" alt="inty" class="d-block w-100 img-fluid" />
            </div>

          <div class="">
            @error('minaloc_widower')<p class="alert alert-danger d-flex align-items-center font-weight-bold" role="alert">
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
                        <form id="partdeform" action="{{ route('widower.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="service_name" value="Icyemezo cy'ubupfakazi">
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
                                    <input id="idnum" name="idnum" type="text" class="form-control" placeholder="Andika nomero y'indangamuntu" formcontrolname="periodFormControl">
                                    @error('idnum')<p class='text-danger'>{{$message}}</p>@enderror

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
                                        <select name="akarere" class="custom-select" placeholder="Hitamo Akarere" style="width: 190px;">
                                            <option selected>Kicukiro</option>
                                            <option value="Gasabo">Gasabo</option>
                                            <option value="Nyarugenge">Nyarugenge</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="sub-label"> Impamvu usaba serivisi <span class="text-danger">*</span></label>
                                        <input type="text" name="impamvu" class="form-control" placeholder="Andika impamvu" formcontrolname="periodFormControl">
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
            </div>
            </form>
        </div>
    </div>
    </div><br><br>

</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')
{{-- <script>
    function Savepart() {
        fetch("{{route('partde.post')}}", {
          headers: {
            "X-CSRF-Token": $('input[name="_token"]').val()
          },
          method: "post",
          credentials: "same-origin",
          body: new FormData(document.getElementById('partdeform'))
        }).then(response=>response.json()).then(function(data){
            console.log(data);
        })
    }

    function CheckID(){
        const idinput = document.getElementById('idnum');
        idinput.addeventListener('keyup', ()=>{
            let id = idinput.value;
            $.ajax({
                type : 'post',
                url : '{{route('partde.post')}}',
                data : id,
                success : function(data){
                    const idmssg = document.getElementById('messag');
                    
                }
            })
        })

    }
</script> --}}
</body>
</html>
