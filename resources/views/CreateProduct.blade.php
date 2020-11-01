@extends('layouts.app')

@section('content')
    <h1>Create a Product</h1>
    <form method="post"action="AddProduct">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cat">Example select</label>
            <select class="form-control" name ="cat" id="cat">
                @foreach($ListeCategorie    as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
