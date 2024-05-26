@include('books.index')

<div class="overlay"></div>

<div class="del-modal-container">
   <div class="modal-title">Delete this book?</div>
   <div class="modal-body">Are you sure do you want to delete <span class="highlight-text">{{$book->book_title}}</span>?</div>
   <div class="modal-btns">
      <a href="{{ url('/') }}" class="button-secondary">Close</a>
      <a href="{{url('books/'. $book->id . '/delete')}}" class="button-danger"">Delete</a>
   </div>
</div>
