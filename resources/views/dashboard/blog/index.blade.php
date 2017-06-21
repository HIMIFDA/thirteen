@extends('dashboard.index')

@section('content')
    <h4>Dashboard Blog.</h4>

    <a href="{{ route('blog-new') }}">Add new post</a>

    <br><br>

    <table border=1>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Created at</th>
                <th>Options</th>
            </tr>
        </thead>

        <tbody>

        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->content }}</td>
                <td>{{ $blog->created_at }}</td>
                <td>
                    <a href="{{ route('blog-edit', $blog->id) }}">Edit</a> | 
                    <a href="{{ route('blog-delete', $blog->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@stop