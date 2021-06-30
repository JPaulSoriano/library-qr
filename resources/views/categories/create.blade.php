@extends('layouts.app')
  
@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        </p><strong>Whoops!</strong> There were some problems with your input.</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow">
                <div class="card-header border-0 bg-primary text-white">Category Name</div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection