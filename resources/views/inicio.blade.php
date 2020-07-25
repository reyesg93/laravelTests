@extends('layouts.app')
@section('content')

<div class="row justify-content-center" >
        @foreach($productos as $producto)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="{{asset('img/caja-.jpg')}}" alt="" class="card-img-top">
                <div class="card-body">
                    <div className="d-flex justify-content-between">
                    <h4>{{$producto->name}}</h4>
                    <h4>$ {{$producto->price}}</h4>
                    <div>
                    <a href="{{route('addCart',$producto->id)}}"><i class="material-icons">shopping_cart</i></a>
                    <a href="" class="pull-right"><i class="material-icons">redeem</i></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    {!! $productos->links() !!}
        
</div>

@endsection

@section('scripts')
<!-- <script>
    $(document).ready(function(){
        
        toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
        toastr.success('Are you the 6 fingered man?<i class="material-icons">shopping_cart</i>')
    })
</script> -->
@endsection