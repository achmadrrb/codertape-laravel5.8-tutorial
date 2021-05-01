@extends('layout/main')

@section('container')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <form action="customer" method="POST">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama" name="name" >
                    </div>
                    <div>{{ $errors->first('name') }}</div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Alamat" name="alamat" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    @csrf
                </form>
                
                @foreach($customerss as $customer)
                <h1>Hello {{$customer -> name}}!</h1>
                <p>Alamat = {{$customer -> alamat}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
