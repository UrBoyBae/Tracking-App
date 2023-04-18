<?php
 namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
    use App\Models\KaryawanModel;
    use App\Models\AbsenModel;
    use App\Models\CutiModel;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Carbon;
    use Illuminate\Http\Request;
    use App\Models\LoginModel;

    class PageController extends BaseController {
    
        public function login() {
            return view('login');
        }

        //dashboard
        public function dashboard(Request $request) {
            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $date = $tgl->format('Y-m-d'); 
            $kar = DB::table('karyawan')->count();
            $abs = DB::table('absen')->where('jam_masuk', 'like', '%'. $date .'%')->count();
            $cuti = DB::table('cuti')->count();

            $datacuti = DB::table('cuti')
            ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('cuti.*', 'karyawan.jk')
            ->where('status', 'Terkirim')
            ->get();

            $title = 'Dashboard';

            $username = $request->session()->get('username');
            $profile = DB::table('login')->where('user', $username)->get();
            // $jk = DB::table('login')->where('user', $username)->get('jk');
            
            $jk = $request->session()->get('jk');
        
            $year = $tgl->format('Y');

            $januari = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 1 AND YEAR(jam_masuk) = '
             .$year)->where('status', '=', 'Tepat Waktu')->count();
            $jan_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 1 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $february = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 2 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $feb_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 2 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $maret = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 3 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $mar_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 3 AND YEAR(jam_masuk) = ' 
            .$year) ->where('status', '=', 'Terlambat')->count();
            $april = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 4 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $apr_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 4 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $mei = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 5 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $mei_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 5 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $juni = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 6 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $jun_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 6 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $juli = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 7 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $jul_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 7 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $agustus = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 8 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $aug_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 8 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $september = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 9 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $sept_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 9')->where('status', '=', 
            'Terlambat')->count();
            $oktober = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 10 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $oct_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 10 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $november = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 11 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $nov_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 11 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();
            $desember = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 12 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Tepat Waktu')->count();
            $des_telat = DB::table('absen')->whereRaw('MONTH(jam_masuk) = 12 AND YEAR(jam_masuk) = ' 
            .$year)->where('status', '=', 'Terlambat')->count();

            // dd($datacuti);
            return view('pages/dashboard', compact('kar', 'abs', 'cuti', 'title', 'username', 'profile', 
            'januari', 'jan_telat', 'february', 'feb_telat', 'maret', 'mar_telat', 'april', 'apr_telat', 
            'mei', 'mei_telat', 'juni', 'jun_telat', 'juli', 'jul_telat', 'agustus', 'aug_telat', 'september', 
            'sept_telat', 'oktober', 'oct_telat', 'november', 'nov_telat', 'desember', 'des_telat', 'jk', 'datacuti'));
        }

        //Karyawan
        public function indexKaryawan(Request $request) {
            
            $last_id = DB::table('karyawan')->max('id_karyawan');
            $id = $last_id + 1;
            $new_id = sprintf("%03d", $id);

            $karyawan = DB::table('karyawan')
                ->orderBy('id_karyawan', 'asc')->get();
            
            $username = $request->session()->get('username');

            $datacuti = DB::table('cuti')
            ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('cuti.*', 'karyawan.jk')
            ->where('status', 'Terkirim')
            ->get();

            $jk = $request->session()->get('jk');

            $title = 'Data Karyawan';

            // mengirim data karyawan ke view karyawan
            return view('pages/karyawan', compact('karyawan',
            'new_id', 'title',
            'username', 'jk', 'datacuti'));
        }

        public function createkar(Request $request)
        {
            $username = $request->username;

            if(DB::table('karyawan')->where('username', $username)->exists()){
                return back()->with('errorAdd', 'Username Sudah Terpakai' );
            }
            else{
                DB::table('karyawan')->insert([
                    'id_karyawan' => $request->UID,
                    'nama' => $request->nama,
                    'username' => $request->username,
                    'password' => $request->password,
                    'alamat' => $request->alamat,
                    'jk' => $request->jk,
                    'hp' => $request->hp,
                    'sisa_cuti' => '12'
                ]);
    
                $username = $request->session()->get('username');
    
                session()->flash('successAdd', true);
                // dd(session()->get('successAdd'));
                return back();
            }
            
        }

        public function destroy(Request $request, $id) 
        {
            // menghapus data karyawan berdasarkan id yang dipilih
            DB::table('karyawan')->where('id_karyawan',$id)->delete();
                
            // alihkan halaman ke halaman karyawan
            session()->flash('successDel', true);
            return back();
        }

        public function update(Request $request, $id){

            $cuti = filter_var($request->sisa_cuti, FILTER_SANITIZE_NUMBER_INT);
            DB::table('karyawan')
            ->where('id_karyawan', $id)
            ->update([
                'id_karyawan' => $request->UID,
                'nama' => $request->nama,
                'username' => $request->username,
                'password' => $request->password,
                'alamat' => $request->alamat,
                'jk' => $request->jk,
                'hp' => $request->hp,
                'sisa_cuti' => $cuti
            ]);

            session()->flash('successUp', true);
            return back();
        }


        //absensi
        public function dataAbsensi(Request $request) {
            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $day = $tgl->isoFormat('dddd');
            $tanggal = $tgl->format('d M Y');
            $date = $tgl->format('Y-m-d'); 
            $absen = DB::table('absen')
                ->where('jam_masuk', 'like', '%'.$date.'%')->get();

            $username = $request->session()->get('username');

            $datacuti = DB::table('cuti')
            ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('cuti.*', 'karyawan.jk')
            ->where('status', 'Terkirim')
            ->get();
            $jk = $request->session()->get('jk');
           

            return view('pages/absensi', ['absen' => $absen, 'day' => $day, 'tanggal' => $tanggal, 'title' => 'Data Absensi', 'username'=>$username, 'jk'=>$jk, 'datacuti'=>$datacuti, ]);
        }

        public function filter(Request $request) {

            $firstDate = $request->query('firstDate');
            $secondDate = $request->query('secondDate');

            $hariSatu =  $firstDate ? Carbon::parse($firstDate)->format('Y-m-d') : null;
            $hariDua =  $secondDate ? Carbon::parse($secondDate)->format('Y-m-d') : null;
            $namakar = $request->query('namakaryawan');
            $query = $request->query('uidkaryawan');

            if($hariSatu == null && $hariDua == null && $namakar == null ){
                $absen = AbsenModel::where('id_karyawan', $query)->get();
            }
            elseif($hariSatu == null && $hariDua == null && $query == null){
                $absen = AbsenModel::where('nama', $namakar )->get();
            }
            elseif($hariSatu != null && $hariDua == null && $query == null && $namakar ==  null){
                $absen = AbsenModel::where('jam_masuk', $hariSatu )->get();
            }
            elseif($hariSatu != null && $hariDua == null && $query != null && $namakar ==  null){
                $absen = AbsenModel::where('jam_masuk', $hariSatu )
                ->where('id_karyawan', $query)->get();
            }
            elseif($hariSatu != null && $hariDua == null && $query == null && $namakar !=  null){
                $absen = AbsenModel::where('jam_masuk', $hariSatu )
                ->where('nama', $namakar)->get();
            }
            elseif($hariSatu == null && $hariDua == null && $query == null && $namakar ==  null){
                return route('absensi');
            }
            elseif($hariSatu == null && $hariDua == null && $query != null && $namakar !=  null){
                $absen = AbsenModel::where('id_karyawan', $query)
                ->where('nama', $namakar)->get();
            }
            else{
                $absen = AbsenModel::where('id_karyawan', $query)
                ->where('nama', $namakar)
                ->whereBetween('jam_masuk', [$hariSatu, $hariDua])
                ->get();
            }
    
            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $day = $tgl->isoFormat('dddd');
            $tanggal = $tgl->format('d M Y');

            $username = $request->session()->get('username');

            $jk = $request->session()->get('jk');

            $datacuti = DB::table('cuti')
            ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('cuti.*', 'karyawan.jk')
            ->where('status', 'Terkirim')
            ->get();
            
            return view('pages/absensi', ['absen' => $absen, 'day' => $day, 'tanggal' => $tanggal, 'title' => 'Data Absensi', 'username'=>$username, 'jk'=>$jk, 'datacuti'=>$datacuti, ]);
            
        }


        //cuti

        public function dataCuti(Request $request) {
            // $cuti = CutiModel::all();
            $cuti = DB::table('cuti')
            ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
            ->select('cuti.*', 'karyawan.jk')
            ->get();
            $username = $request->session()->get('username');

            $datacuti = DB::table('cuti')
                ->join('karyawan', 'cuti.id_karyawan', '=', 'karyawan.id_karyawan')
                ->select('cuti.*', 'karyawan.jk')
                ->where('status', 'Terkirim')
                ->get();
            $jk = $request->session()->get('jk');
           

            return view('pages/cuti', ['cuti'=>$cuti, 'title' => 'Permohonan Cuti', 'username'=>$username, 'jk'=>$jk, 'datacuti'=>$datacuti]);
        }

        public function editCuti(Request $request, $id){
            DB::table('cuti')
            ->where('id_cuti', $id)
            ->update([
                'status' => $request->status,
                'alasan' => $request->alasan
            ]);

            session()->flash('successConf', true);
            return back();
        }

        public function deleteCuti($id){
            DB::table('cuti')->where('id_cuti', $id)->delete();
            return redirect('cuti');
            
        }


        //reset
        public function reset(Request $request){
            DB::table('karyawan')->update(['sisa_cuti'=>12]);
            session()->flash('successRes', true);
            return back();

        }

}
