@extends('admin.layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fal fa-home"></i></a></li>                            
                        <li class="breadcrumb-item active">IremboGov</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                            data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                        <span>Visitors</span>
                    </div>
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                            data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                        <span>Visits</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
              <div class="card">
                <div class="header">
                  <h2><strong>Service</strong></h2>
                </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width:60px;">S.N#</th>
                                        <th>Wrong tel</th>
                                        <th>Wrong password</th>
                                        <th>Time</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0793334533</td>
                                        <td>11111</td>
                                        <td>03-03-2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
  $('input[name=toogle]').change(function () {
    var mode=$(this).prop('checked'); 
    var id=$(this).val();
    $.ajax({
      url:"{{route('services.status')}}",
      type: "POST",
      data:{
        _token:'{{csrf_token()}}',
        mode:mode,
        id:id,
      },
      success:function (response) {
        if(response.status){
          alert(response.msg)
        } else {
          alert('Please try again');
        }
      }
    })
  });
</script> --}}

@endsection
