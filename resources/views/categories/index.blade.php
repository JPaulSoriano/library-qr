@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-12">
                <a class="btn btn-primary btn-sm" href="{{ route('categories.create') }}">Add</a>
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
    <table class="table table-bordered" id="categories">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($categories as $category)
    <tbody>
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
   
                    <a class="btn btn-primary btn-sm" href="{{ route('categories.show',$category->id) }}">Show</a>
    
                    <a class="btn btn-primary btn-sm" href="{{ route('categories.edit',$category->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>
  
    {!! $categories->links() !!}
</div>
</div>
</div>
</div>
</div>   
@endsection
@section('scripts')
<script>
$(document).ready(function() {
        $('#categories').DataTable({
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