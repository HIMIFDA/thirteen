@extends('dashboard.index')

@section('content')
    <h4>Dashboard Blog - Edit Post</h4>

    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('blog-update') }}">
        {{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $blog->id }}">

        <div>
            <label for="title">Title</label>

            <div>
                <input id="title" type="text" name="title" value="{{ $blog->title }}">
            </div>
        </div>

        <div>
            <label for="title">Content</label>

            <div>
                <textarea id="content" name="content">{{ $blog->content }}</textarea>
            </div>
        </div>

        <div>
            <label for="title">Content</label>

            <div>
                <input type="file" name="featured_image"
            </div>
        </div>

        <div
            <div>
                <button type="submit">
                    Update
                </button>
            </div>
        </div>
    </form>


@stop