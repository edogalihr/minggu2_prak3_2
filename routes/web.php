<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
class CompanyController extends Controller
{
    public function index(){
        echo "Selamat datang";
    }
    public function MI(){
        echo "Manajemen Informatika";
    }
    public function TI(){
        echo "Teknik Informatika";
    }
    public function news(){
        echo "Sarana news";
    }
    public function Perkantoran(){
        echo "Sarana Perkantoran";
    }
    public function Laboratorium(){
        echo "Sarana Perkantoran";
    }
    public function Kelas(){
        echo "Sarana Kelas";
    }
    public function RuangTU(){
        echo "Sarana Ruang TU";
    }
    public function about(){
        echo "Nama : Edo Galih Rispianto";
        echo "Nim  : 2031710174";
    }
    public function comment(){
        echo "Nama : $nama; : ". "$id?";
    }
}