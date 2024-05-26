@include('books.index')

<div class="overlay"></div>
<div class="add-new-student-modal">
    <a href="{{ url('books') }}" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
    <h3>Add New Book</h3>
    <form action="{{ url('books/create') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Book Title:</label>
            <input type="text" placeholder="Enter book title" name="title" id="title">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">Book Author:</label>
            <input type="text" placeholder="Enter book author" name="author" id="author">
            @error('author')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Is Readed:</label>
            <div class="radio-group">
                <input type="radio" id="read-yes" name="is_read" value="yes" required>
                <label for="read-yes">Yes</label>
                <input type="radio" id="read-no" name="is_read" value="no" required checked>
                <label for="read-no">No</label>
                @error('is_read')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <input type="submit" value="Submit" name="submit" class="button-secondary submit-btn">
    </form>
</div>