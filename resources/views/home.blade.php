@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h1>Kalkulator Sederhana</h1>
        <hr>
        <br>
        <form action="/" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-2">
                    <input type="number" name="a" class="form-control" placeholder="Masukkan nilai a">
                </div>
                <div class="col-md-2">
                    <input type="number" name="b" class="form-control" placeholder="Masukkan nilai b">
                </div>
                <div class="col">
                    <input type="submit" name="operasi" class="btn btn-primary" value="+">
                    <input type="submit" name="operasi" class="btn btn-primary" value="-">
                    <input type="submit" name="operasi" class="btn btn-primary" value="*">
                    <input type="submit" name="operasi" class="btn btn-primary" value="/">
                </div>
            </div>
        </form>
        @if (session()->has('hasil'))
        <div class="alert alert-info">
        <p>Hasilnya adalah {{ session('hasil') }}</p>
        </div>
        @endif
    </div>
@endsection