<?php
 namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

    class PageController extends BaseController {
        public function login() {
            return view('login');
        }

        public function dashboard() {
            return view('pages/dashboard');
        }

        public function indexKaryawan() {
            return view('pages/karyawan');
        }

        public function dataAbsensi() {
            return view('pages/absensi');
        }
    }
