@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Book</h1>
    <hr />
    <form action="{{ route('book.update', $book->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Book Name</label>
          <input type="text" name="name" class="form-control" placeholder="Book Name" value="{{ $book->name }}">
            </div>
            <div class="col">
                <label class="form-label">Author</label>
          <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $book->author }}">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
            <label class="form-label">Year</label>
          <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $book->year }}" >
            </div>
            <div class="col">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" >{{ $book->description }}</textarea>
        </div>
      </div>
      <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
@endsection