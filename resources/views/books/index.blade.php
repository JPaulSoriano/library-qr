@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
                <a class="btn btn-primary btn-sm" href="{{ route('books.create') }}">Add</a>
        </div>
    </div>
   <div class="row">
    <div class="col-lg-12">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    </div>
   </div>
<div class="row">
<div class="col-lg-12">
    <div class="card border-0 shadow">
    <div class="card-header border-0 bg-primary text-white">Book Details</div>
        <div class="card-body">
                <table class="table table-bordered table-responsive" id="books">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>ISBN</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Quantity</th>
                        <th>Accession No</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                    @foreach ($books as $book)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category->name }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>{{ $book->ac_no }}</td>
                        <td>
                            <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                                <a class="btn btn-primary btn-sm btn-block" href="{{ route('qrcode',$book->id) }}">QR</a>
                                <a class="btn btn-primary btn-sm btn-block" href="{{ route('books.edit',$book->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger btn-sm btn-block my-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                    @endforeach
                </table>
                {!! $books->links() !!}
        </div>
    </div>
</div>
</div>
</div>  
@endsection

@section('scripts')
<script>
$(document).ready(function() {
        $('#books').DataTable({
            order: [[0, 'desc']],
            dom: 'Bfrtip',
            buttons: [{
                responsive: true,
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [0, ':visible']
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':visible'
                    }
                },

                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ]
        });
    });
    </script>
@endsection