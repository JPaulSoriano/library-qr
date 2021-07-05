@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-primary align-items-center text-white">
                <div class="card-body">
                <div class="h2">BOOKS</div>
                <div class="text-center h4">{{$books}}</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary align-items-center text-white">
                <div class="card-body">
                <div class="h2">TOTAL QUANTITY</div>
                <div class="text-center h4">{{$bookqty}}</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-primary align-items-center text-white">
                <div class="card-body">
                <div class="h2">CATEGORIES</div>
                <div class="text-center h4">{{$categories}}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
