@extends('layout.master')

@section('title')
    Fibonacci
@endsection

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="GET" action="/fibonacci" class="bg-white form-container" id="forminput">
                    <h2>Menghitung Deret Fibonacci</h2>
                    <br />
                    <div class="form-group">
                        <label for="input1">Input 1</label>
                        <input type="text" class="form-control" value="{{ $input1 }}" id="input1"
                            placeholder="Masukkan Angka Pertama" name="input1" required />
                    </div>
                    <div class="form-group">
                        <label for="input2">Input 2</label>
                        <input type="text" class="form-control" value="{{ $input2 }}" id="input2"
                            placeholder="Masukkan Angka Kedua" name="input2" required />
                    </div>

                    <div class="form-group">
                        <label for="input2">Jumlah Deret</label>
                        <input type="text" class="form-control" value="{{ $jmlderet }}" id="jmlderet"
                            placeholder="Masukkan Jumlah Deret" name="jmlderet" required />
                    </div>
                    <button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">
                        Hitung
                    </button>
                    <br />
                    <div class="form-group">
                        <h5> <b>Hasil: </b> </h5>
                        <h4> {{ $deret }} </h4>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Container -->
    </div>
@endsection