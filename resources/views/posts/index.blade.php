@extends('admin.dashboard.index')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td><img src="{{ Storage::url($post->image) }}" height="75" width="75" alt="" /></td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->price }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $posts->links() !!}
@endsection
