@extends('layouts.app')



@section('content')
<div class="container table-container">
    <div class="table-header">
        <h5>My Reading List <i class="fa-solid fa-heart"></i> </h5>
        <a href="{{ url('books/create') }}" class="add-student-btn button-secondary"><i class="fa-solid fa-plus"></i>Add Book</a>
    </div>
    <table class="table w-full">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Is Readed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php $no = 0 ?>
            @foreach($books as $book)
            <?php $no++ ?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{ $book->book_title }}</td>
                    <td>{{ $book->book_author }}</td>
                    <td style="color: {{ $book->is_readed == 1 ? 'green' : 'red'}};">{{ $book->is_readed == 1 ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ url('books/'.$book->id.'/edit') }}" class="button-primary">Edit</a>
                        <a href="{{ url('books/'.$book->id.'/confirm') }}" class="button-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@if(session('success'))
    <div class="message" data-messageType='success'>{{session('success')}}</div>
@endif

@if(session('danger'))
    <div class="message" data-messageType='error'>{{session('danger')}}</div>
@endif
@endsection