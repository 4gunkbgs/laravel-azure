<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('home');
    }

    public function fibonacci(){
        //set input hasil dan deret menjadi kosong
        $input1 = "";           //input1
        $input2 = "";           //input2
        $hasil = "";            //hasil
        $deret = "";            //deret yang ditampilin
        $jmlderet = "";         //jml deret

        if (isset($_GET['submit'])) {      //cek jika tombol submit ditekan

            $input1 = $_GET["input1"];
            $input2 = $_GET["input2"];
            $jmlderet = $_GET["jmlderet"];

            //fibonacci

            $a = $input1;
            $b = $input2;
            $n = $jmlderet;

            $deret = $a . ", " . $b;
            for ($i = 0; $i < $n - 2; $i++) {

                $hasil = $a + $b;

                $a = $b;
                $b = $hasil;
                $deret = $deret . ", " . $hasil;
            }        
        }
        return view ('fibonacci', compact('input1', 'input2', 'jmlderet', 'deret'));
    }

    public function aritmatika(){
        $suku1 = "";           //input1
        $beda = "";            //input2
        $suku_n = "";          //suku ke - n
        $baris = "";           //baris yang akan disimpan
        $baristampil = "";       //baris yang akan tampil
        $hasil = "";           //hasil yang akan tampil


        if (isset($_GET['submit'])) {      //cek jika tombol submit ditekan

            $suku1 = $_GET["suku1"];
            $beda = $_GET["beda"];
            $suku_n = $_GET["suku_n"];

            //aritmatika

            $a = $suku1;
            $b = $beda;
            $n = $suku_n;

            //suku ke n
            $hasil = $a + ($n - 1) * $b;

            //tampilan baris
            for ($i = 1; $i < $n + 1; $i++) {
                $baris = $a + ($i - 1) * $b;
                $baristampil .= $baris . " ";
            }
        }
        return view ('aritmatika', compact('suku1', 'beda', 'suku_n', 'hasil', 'baristampil'));
    }
}