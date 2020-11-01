@extends('layouts.app')

@section('content')
    <div class="container">

    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>

    </tr>
    </thead>
    <tbody>
    @foreach($ListeCategorie    as $key => $value)

        <tr>

            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>
                <a href="{{ route('EditCategorie',$value->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('DeleteCategorie', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
    </div>
@endsection

