@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a href="{{ route('posts.create') }}" class="btn btn-primary mt-3 mb-5">New Post</a>

            <table class="table">

                <thead>
                    <tr>
                        <th>Title</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('posts.destroy', $post) }}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>
@endsection
