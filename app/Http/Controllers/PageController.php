<?php
 namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
    use App\Models\KaryawanModel;
    use App\Models\AbsenModel;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Carbon;
    use Illuminate\Http\Request;

    class PageController extends BaseController {
        public function login() {
            return view('login');
        }

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
                'alamat' => $request->alamat,
                'password' => $request->password,
                'jk' => $request->jk,
                'hp' => $request->hp
                
            ]);

            return redirect()->route('karyawan')->with('success', 'Data berhasil ditambahkan.');
        }

        public function cari(Request $request)
        {
            $filter = $request->input('filter');
            $query = $request->input('value');
            $karyawan = DB::table('karyawan')
            ->where($filter, 'like', '%' . $query . '%')
            ->paginate(5);
            $last_id = DB::table('karyawan')->max('id_karyawan');
            $new_id = $last_id + 1;

            return redirect()->route('karyawan', compact('karyawan'));
        }

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

        public function filter(Request $request)
        {
            $firstDate = $request->query('firstDate');
            $secondDate = $request->query('secondDate');

            $hariSatu =  $firstDate ? Carbon::parse($firstDate)->format('Y-m-d') : null;
            $hariDua =  $secondDate ? Carbon::parse($secondDate)->format('Y-m-d') : null;
            $query = $request->query('uidkaryawan');

            $absen = AbsenModel::where('uid', 'like', '%' . $query . '%')
            ->whereBetween('jam_masuk', [$hariSatu, $hariDua])
            ->get();

            setlocale(LC_TIME, 'id_ID');
            Carbon::setLocale('id');
            $tgl = Carbon::now();
            $day = $tgl->isoFormat('dddd');
            $tanggal = $tgl->format('d M Y');
            return view('pages/absensi', ['absen' => $absen, 'day' => $day, 'tanggal' => $tanggal]);

            
        }

        public function destroy($id_karyawan )
        {
            // menghapus data karyawan berdasarkan id yang dipilih
            DB::table('karyawan')->where('id_karyawan',$id_karyawan)->delete();
                
            // alihkan halaman ke halaman karyawan
            return redirect('karyawan');
        }

        public function edit($id_karyawan)
        {
            $kyw = KaryawanModel::findOrFail($id_karyawan);
            return view('update', compact('kyw'));
        }

        public function update(Request $request){
            DB::table('karyawan')
            ->where('id_karyawan', '=', $request->UID)
            ->update([
                'id_karyawan' => $request->UID,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'password' => $request->password,
                'jk' => $request->jk,
                'hp' => $request->hp
            ]);

            return redirect()->route('karyawan')->with('success', 'Data berhasil diubah.');
        }
}
?>