@extends('layouts.interface')

@push('css')

@endpush

@section('container')

<div class="container" style="margin-top: 50px">
    <h2> All the posts</h2>
    <table class="table"  style="text-align: center">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Tags</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)

{{--            {{dd($post->author)}}--}}
        <tr >
                <td> {{$post->id}}</td>
                <td> {{$post->title}}</td>

                <td>{{$post->author->name}}</td>

                <td> @foreach($post->tags as $tag)
                            {{$tag->title}}
                    @endforeach
                </td>

                <td> @foreach($post->categories as $category)
                        {{$category->title}}
                    @endforeach
                </td>

                <td>
                    <button type="button" class="btn btn-success">Show</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>


@endsection
