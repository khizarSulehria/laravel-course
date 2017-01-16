@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Create Post Form</h1>
        <form method="POST" action="{{route('admin.post.store')}}" enctype="multipart/form-data" >
            {{csrf_field()}}

            <div class="form-group">
                <label> Post Title</label>
                <input type="text" name="title" class="form-control">

            </div>


            <div class="form-group">

                <label> </label>
                <input type="text" name="" class="form-control">

            </div>

            <div class="form-group">
                <label> category :</label>
                <select name="category_id" class="form-control">
                    <option value="">choose one</option>
                </select>

            </div>

            <div class="form-group">

                <label> Upload Image</label>
                <input type="file" name="photo_id" class="form-control">

            </div>



            <div class="form-group">

                <label>Discription :</label>
                <textarea name="body" class="form-control" rows="3" ></textarea>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="create Post" name="submit">
            </div>

        </form>
    </div>
    @include('includes.form-errors')
@endsection