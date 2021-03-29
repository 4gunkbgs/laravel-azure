@extends('layout.master')

@section('title')
    Tugas Hosting
@endsection

@section('konten')
    <div class="container container-margin height-container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <a href="/fibonacci" class="btn btn-dark btn-lg btn-block box-container">Deret Fibonacci</a>
            </div>
        </div>

        <br>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <a href="/aritmatika" class="btn btn-dark btn-block btn-lg box-container">Baris Aritmatika</a>
            </div>
        </div>
    </div>
@endsection