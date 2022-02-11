<!doctype html>
<html lang="zxx">
@include('frontend.layouts.head')

<body>
@include('frontend.layouts.header')
<main>
    <div class="container">
        <div class="row justift-content-center roba">
            <div class="col-md-7 mt-3">	
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('front/assets/img/about-extra-1.svg')}}" alt="inty" class="d-block w-100 img-fluid" />
                    </div>
                </div>
            </div>
  
        <div class="col-md-3">
            <div class="cont-input">
            <h3 class="reset-title">Gushakisha dosiye</h3>
            <form id="shakaform" method="post" action="">
              <div class="form-group pt-4">
                <label class="sub-label"> Code ya dosiye <span class="text-danger">*</span></label>
                <select name="ubwoko" class="custom-select" placeholder="Igihe ubwishingizi" style="width: 120px;">
                    <option selected>Nomero yadosie</option>
                    <option value="1">Kode yokwishyura</option>
                </select>
              </div>
              <div class="form-group">
                 <label>Nomero y'idosiye <span class="text-danger">*</span></label>
                 <input name="code" type="text" class="form-control" placeholder="Andika Nomero ya dosiye" />
              </div>
            </form>
              <Button type="submit" class="btn btn-outline-success btn-sx btn-block" onclick="Savedoc()"><i class="fa fa-search"></i> Shaka</Button>
            </div>
        </div>
    </div>
</main>
@include('frontend.layouts.footer')    
@include('frontend.layouts.foot')
<script>
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
</script>
</body>
</html>
