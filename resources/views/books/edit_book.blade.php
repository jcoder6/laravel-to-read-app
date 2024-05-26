@include('books.index')

<div class="overlay"></div>
<div class="add-new-student-modal">
    <a href="{{ url('books') }}" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
    <h3>Edit A Book</h3>
    <form action="{{ url('books/'.$book->id.'/update') }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Book Title:</label>
            <input type="text" placeholder="Enter book title" name="title" id="title" value="{{ $book->book_title }}" required>
        </div>

        <div class="form-group">
            <label for="author">Book Author:</label>
            <input type="text" placeholder="Enter book author" name="author" id="author" value="{{ $book->book_author }}" required>
        </div>

        <div class="form-group">
            <label>Is Readed:</label>
            <div class="radio-group">
                <input type="radio" id="read-yes" name="is_read" value="yes" {{ $book->is_readed == 1 ? 'checked' : '' }}required>
                <label for="read-yes">Yes</label>
                <input type="radio" id="read-no" name="is_read" value="no" {{ $book->is_readed == 1 ? '' : 'checked' }} required>
                <label for="read-no">No</label>
            </div>
        </div>

        <input type="submit" value="Update" name="submit" class="button-secondary submit-btn">
    </form>
</div>