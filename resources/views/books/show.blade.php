@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card border-0 shadow">
                <div class="card-header border-0 bg-primary text-white">Book Details</div>
                    <div class="card-body">
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Title:</span> {{ $book->title }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Author:</span> {{ $book->author }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Category:</span> {{ $book->category->name }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">ISBN:</span> {{ $book->isbn }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Publisher:</span> {{ $book->publisher }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Year:</span> {{ $book->year }}</p>
                        <p><span class="font-weight-bold bg-primary p-1 text-white">Accession No.:</span> {{ $book->ac_no }}</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection