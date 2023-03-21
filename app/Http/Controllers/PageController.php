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
        public function dashboard() {
            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $date = $tgl->format('Y-m-d'); 
            $kar = DB::table('karyawan')->count();
            $abs = DB::table('absen')->where('jam_masuk', 'like', '%'. $date .'%')->count();
            $cuti = DB::table('cuti')->count();
            return view('pages/dashboard', ['kar' => $kar, 'abs' => $abs, 'cuti' => $cuti, 'title' => 'Dashboard']);
        }

        //Karyawan
        public function indexKaryawan() {
            
            $last_id = DB::table('karyawan')->max('id_karyawan');
            $id = $last_id + 1;
            $new_id = sprintf("%03d", $id);

            $karyawan = DB::table('karyawan')
                ->orderBy('id_karyawan', 'asc')->get();
            
            // mengirim data karyawan ke view karyawan
            return view('pages/karyawan', ['karyawan' => $karyawan, 'new_id' => $new_id, 'title' => 'Data Karyawan']);
        }

        public function createkar(Request $request)
        {
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

            return redirect()->route('karyawan')->with('success', 'Data berhasil ditambahkan.');
        }

        

        public function destroy($id)
        {
            // menghapus data karyawan berdasarkan id yang dipilih
            DB::table('karyawan')->where('id_karyawan',$id)->delete();
                
            // alihkan halaman ke halaman karyawan
            return redirect('karyawan');
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

            return redirect()->route('karyawan')->with('success', 'Data berhasil diubah.');
        }


        //absensi
        public function dataAbsensi() {
            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $day = $tgl->isoFormat('dddd');
            $tanggal = $tgl->format('d M Y');
            $date = $tgl->format('Y-m-d'); 
            // $absen = AbsenModel::where('jam_masuk', '=', '2023-02-16');
            // $absen->paginate(5);
            $absen = DB::table('absen')
                ->where('jam_masuk', 'like', '%'.$date.'%')->get();

            return view('pages/absensi', ['absen' => $absen, 'day' => $day, 'tanggal' => $tanggal, 'title' => 'Data Absensi']);
        }

        public function filter(Request $request) {
            $firstDate = $request->query('firstDate');
            $secondDate = $request->query('secondDate');

            $hariSatu =  $firstDate ? Carbon::parse($firstDate)->format('Y-m-d') : null;
            $hariDua =  $secondDate ? Carbon::parse($secondDate)->format('Y-m-d') : null;
            $query = $request->query('uidkaryawan');

            if($hariSatu == null && $hariDua == null){
                $absen = AbsenModel::where('id_karyawan', 'like', '%' . $query . '%')->get();
            }
            else{
                $absen = AbsenModel::where('id_karyawan', 'like', '%' . $query . '%')
                ->whereBetween('jam_masuk', [$hariSatu, $hariDua])
                ->get();

            }
            

            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $day = $tgl->isoFormat('dddd');
            $tanggal = $tgl->format('d M Y');
            return view('pages/absensi', ['absen' => $absen, 'day' => $day, 'tanggal' => $tanggal, 'title' => 'Data Absensi']);

            
        }


        //cuti

        public function dataCuti() {
            $cuti = CutiModel::all();
            return view('pages/cuti', ['cuti'=>$cuti, 'title' => 'Permohonan Cuti']);
        }

        public function editCuti(Request $request, $id){
            DB::table('cuti')
            ->where('id_cuti', $id)
            ->update([
                'status' => $request->status
            ]);

            return redirect('cuti');
        }

        public function deleteCuti($id){
            DB::table('cuti')->where('id_cuti', $id)->delete();
            return redirect('cuti');
            
        }

}
?>