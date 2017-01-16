@extends('layouts.admin')


@section('content')
    <h1>posts index</h1>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>User Id</th>
            <th>Photos id</th>
            <th>category</th>
            <th>Title</th>
            <th>Body</th>
            <th>created at</th>
            <th>updated at</th>
        </tr>
        </thead>
        @if($posts)
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>
                        @if($post->user)
                          {{  $post->user->name  }}
                        @else
                            no user for this posts
                        @endif
                    </td>
                    <td>
                        @if($post->photo)
                            <img style="height: 100px;" src="/images/{{$post->photo->file}}">
                        @else
                            no photo for this posts
                        @endif
                    </td>
                    <td>
                        @if($post->category_id)
                           {{  $post->category_id }}
                        @else
                            no category for this posts
                        @endif
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForhumans() }}</td>
                    <td>{{ $post->updated_at->diffForhumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        @endif
    </table>
@endsection