<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>
    <div class="container space-he">
        <div class="card">
        <div class="row justift-content-center"style="margin: 50px 0px 80px;">
                    <div class="col-md-7">	
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('front/assets/img/documents.svg')}}" alt="inty" class="d-block w-100 img-fluid" />
                            </div>
                        </div>
                    </div>
  
                    <div class="col-md-4">
                        <div class="cont-input">
                        <h3 class="reset-title mt-5">Gushakisha dosiye</h3>
                        <form id="shakaform" action="">
                            <div class="form-group pt-4">
                                <label class="sub-label"> Code ya dosiye <span class="text-danger">*</span></label>
                                <select name="doctype" class="custom-select" placeholder="Igihe ubwishingizi" style="width: 120px;">
                                    <option selected>Nomero yadosie</option>
                                    <option value="1">Kode yokwishyura</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nomero y'idosiye <span class="text-danger">*</span></label>
                                <input name="docid" type="text" class="form-control" placeholder="Andika Nomero ya dosiye" />
                            </div>
                            <Button type="submit" class="btn btn-outline-success btn-sx btn-block"><i class="fa fa-search"></i> Shaka</Button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>

@include('frontend.layouts.footer')  

@include('frontend.layouts.foot')
{{-- <script>
    function Savedoc() {
        fetch("{{route('shaka.post')}}", {
          headers: {
            "X-CSRF-Token": $('input[name="_token"]').val()
          },
          method: "post",
          credentials: "same-origin",
          body: new FormData(document.getElementById('shakaform'))
        }).then(response=>response.json()).then(function(data){
            console.log(data);
        })
    }
</script> --}}
</body>
</html>
