@extends('layout/main')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                @foreach($notelp as $telpon)
                <h1>{{$telpon}}</h1>
                @endforeach
            </div>
        </div>
    </div>
@endsection
