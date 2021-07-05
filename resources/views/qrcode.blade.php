@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="row d-flex-justify-content-center">
                        <div class="col-lg-12 my-3 text-center" id="printJS-form">
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(250)
                             ->merge(public_path('images/logo.png'), 0.3, true)->errorCorrection('H')
                             ->color(0, 28, 64)
                             ->margin(2)
	                         ->generate(url('/books')."/".$book->id)); !!}">
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-3">
        <div class="col-md-4 text-center">
            <button type="button" class="btn btn-sm btn-primary btn-block" onclick="printJS('printJS-form', 'html')">Print</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection