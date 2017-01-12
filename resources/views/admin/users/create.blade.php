@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Create User Form</h1>
        <form method="POST" action="{{route('admin.user.store')}}" enctype="multipart/form-data" >
            {{csrf_field()}}

            <div class="form-group">
                <label> Enter Name</label>
                <input type="text" name="name" class="form-control" placeholder="abc xyz">

            </div>


            <div class="form-group">

                <label> Enter Email</label>
                <input type="email" name="email" class="form-control" placeholder="example@xyz.com">

            </div>

            <div class="form-group">
                <label> Role :</label>
                {{--<input type="text" name="role_id" class="form-control" placeholder="eg@ administrator">--}}
                <select name="role_id" class="form-control">
                    <option value="">choose one</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label> status</label>
                <select name="is_active" class="form-control">
                    <option value="0">Un Active</option>
                    <option value="1">Active</option>
                </select>
            </div>

            <div class="form-group">

                <label> Upload Image</label>
                <input type="file" name="photo_id" class="form-control">

            </div>



            <div class="form-group">

                <label> Enter Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">

            </div>


            {{--<div class="form-group">--}}

                {{--<label> Confirmed Password</label>--}}
                {{--<input type="password" name="confirmedpassword" class="form-control" placeholder="confirmed Password">--}}

            {{--</div>--}}

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="create user" name="submit">
            </div>

        </form>
    </div>
@include('includes.form-errors')
@endsection