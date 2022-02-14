@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="d-flex justify-content-center row">
        
           <div class="card card-primary card-outline col-10">
                   <div class="card-header">
      <h3 class="card-title">Cari Data Pelanggan  </h3>
     
    </div>
    <div class="card-body row">

                     <form class="col-10" role="form" method="post" action="/invoice">
                @csrf
                   


    <input type="text" id="cid"  name="cid" class="form-control" placeholder="Masukkan CID / Kode Pelanggan" />
   {{--  <label class="form-label" for="form1">Search</label> --}}
  
  <button type="submit" class="btn btn-primary mt-3">
    <i class="fas fa-search">Search</i>
  </button>
</form>
                </div>
              </div>


 @if (!empty($msg))
<div class="col-10">
<a class="text-danger">*{{ $msg }} </a>
</div>
@endif

           
        </div>
    </div>

@endsection
