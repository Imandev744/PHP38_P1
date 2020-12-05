@extends('layouts.interface')

@push('css')


@endpush

@section('container')

<div class="container" style="margin-top: 50px">
    <h2> All the posts</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Tags</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
        <tr>
                <td> {{$post->id}}</td>
                <td> {{$post->title}}</td>
                <td>{{$post->author}}</td>

                <td> @foreach($post->tags as $tag)
                            {{$tag->title}}
                    @endforeach
                </td>

                <td> @foreach($post->categories as $category)
                        {{$category->title}}
                    @endforeach
                </td>

                <td>    </td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>


@endsection
