@extends('layouts.app')

@section('content')
<h1>Create a category</h1>
<form method="post"action="AddCategorie">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
