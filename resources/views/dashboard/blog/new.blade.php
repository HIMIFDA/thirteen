@extends('dashboard.index')

@section('content')
    <h4>Dashboard Blog - Add New Post</h4>

    <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('blog-submit') }}">
        {{ csrf_field() }}

        <div>
            <label for="title">Title</label>

            <div>
                <input id="title" type="text" name="title" placeholder="Title ...">
            </div>
        </div>

        <div>
            <label for="title">Content</label>

            <div>
                <textarea id="content" name="content"></textarea>
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
                    Submit
                </button>
            </div>
        </div>
    </form>


@stop