@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $category->name }}
            </div>
        </div>
    </div>
</div>
@endsection