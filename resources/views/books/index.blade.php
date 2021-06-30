@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
                <a class="btn btn-primary btn-sm" href="{{ route('books.create') }}">Add</a>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
<div class="row">
<div class="col-lg-12">
    <div class="card border-0 shadow">
    <div class="card-header border-0 bg-primary text-white">Book Details</div>
        <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>ISBN</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Quantity</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category->name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>
                            <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                                <a class="btn btn-primary btn-sm" href="{{ route('books.show',$book->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('books.edit',$book->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {!! $books->links() !!}
        </div>
    </div>
</div>
</div>
</div>  
@endsection