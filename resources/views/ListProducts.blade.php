@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Category ID</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ListeP    as $cat )
                @foreach($cat    as $value )
                <tr>



                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                    <td>{{ $value->category_id }}</td>

                </tr>
                @endforeach
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

