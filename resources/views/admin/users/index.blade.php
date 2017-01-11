@extends('layouts.admin')



@section('content')
<h1>admin / user        index</h1>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
            </thead>
           @if($users)
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
                            @if($user->is_active == 0)
                                 un active
                                @else
                                active
                            @endif
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
             @endif
        </table>
@endsection