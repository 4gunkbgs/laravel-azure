@extends('layout.master')

@section('title')
    Aritmatika
@endsection

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="GET" action="/aritmatika" class="bg-white form-container" id="forminput">
                    <h2>Menghitung Baris Aritmatika</h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Suku Pertama (a)</label>
                        <input type="text" class="form-control" value="{{ $suku1 }}" id="input1"
                            placeholder="Masukkan Suku Pertama" name="suku1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Beda (b)</label>
                        <input type="text" class="form-control" value="{{ $beda }}" id="input2"
                            placeholder="Masukkan Beda Dari Baris" name="beda" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Suku Yang Dicari (n)</label>
                        <input type="text" class="form-control" value="{{ $suku_n }}" id="jmlderet"
                            placeholder="Masukkan Suku Yang Ingin Dicari" name="suku_n" required />
                    </div>

                    <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">
                        Hitung
                    </button>

                    <br />
                    <div class="form-group">
                        <h5> <b>Suku Ke-N (Un): </b> </h5>
                        <h4> {{ $hasil }} </h4>
                    </div>

                    <div class="form-group">
                        <h5> <b>Baris Aritmatika: </b> </h5>
                        <h4> {{ $baristampil }} </h4>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>
@endsection