@extends('layout')

@section('content')

<div class="container mt-5">
    <!-- Admin Page Header -->
    <h1 class="text-center mb-4">Admin Panel</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ implode(', ', $errors->all()) }}
        </div>
    @endif

    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary text-white">
            <h3>Post yaratish</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('create_post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
                </div>
                <div class="mb-3">
                    <label for="discription" class="form-label">Description</label>
                    <textarea name="discription" id="discription" rows="4" class="form-control" placeholder="Enter description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Post List Section -->
    <h2 class="text-center mb-4">Posts</h2>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg h-100">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->discription }}</p>
                    <p class="text-muted small">Posted {{ $post->created_at->diffForHumans() }}</p>

                    <div class="d-flex justify-content-between mt-3">
                        
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Update</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Postni o‘chirishni tasdiqlaysizmi?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- Contact Messages Section -->
    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary text-white">
            <h3>Contact Xabarlar</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   

</div>
@endsection
