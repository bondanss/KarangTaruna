<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Telepon;
use App\Kelurahan;
use App\Hobi;
use App\Http\Requests\AnggotaRequest;
use Storage;
use Session;


class AnggotaController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => [
            'index', 'show', 'cari'
        ]]);
    }

    /*
    | -------------------------------------------------------------------------------------------------------
    | INDEX
    | -------------------------------------------------------------------------------------------------------
    */
    public function index() {
        $anggota_list = Anggota::paginate(5);
        $jumlah_anggota = Anggota::count();
        return view('anggota.index', compact('anggota_list', 'jumlah_anggota'));
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | SHOW DETAIL
    | -------------------------------------------------------------------------------------------------------
    */
    public function show(Anggota $anggota) {
        return view('anggota.show', compact('anggota'));
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | CREATE
    | -------------------------------------------------------------------------------------------------------
    */
    public function create() {
        return view('anggota.create');
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | EDIT
    | -------------------------------------------------------------------------------------------------------
    */
    public function edit(Anggota $anggota) {
        if (!empty($anggota->telepon->nomor_telepon)) {
            $anggota->nomor_telepon = $anggota->telepon->nomor_telepon;
        }

        return view('anggota.edit', compact('anggota'));
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | STORE
    | -------------------------------------------------------------------------------------------------------
    */
    public function store(AnggotaRequest $request) {
        $input = $request->all();

        // Upload foto.
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        // Insert Anggota.
        $anggota = Anggota::create($input);

        // Insert Telepon.
        if ($request->filled('nomor_telepon')) {
            $this->insertTelepon($anggota, $request);
        }

        // Insert Hobi.
        $anggota->hobi()->attach($request->input('hobi_anggota'));

        // Flass message.
        Session::flash('flash_message', 'Data anggota berhasil disimpan.');

        return redirect('anggota');
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | UPDATE
    | -------------------------------------------------------------------------------------------------------
    */
    public function update(Anggota $anggota, AnggotaRequest $request) {
        $input = $request->all();

        // Update foto.
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->updateFoto($anggota, $request);
        }

        // Update anggota.
        $anggota->update($input);

        // Update telepon.
        $this->updateTelepon($anggota, $request);

        // Update hobi.
        $anggota->hobi()->sync($request->input('hobi_anggota'));

        // Flash message.
        Session::flash('flash_message', 'Data anggota berhasil diupdate.');

        return redirect('anggota');
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | DESTROY / DELETE
    | -------------------------------------------------------------------------------------------------------
    */
    public function destroy(Anggota $anggota) {
        // Hapus foto kalau ada.
        $this->hapusFoto($anggota);

        $anggota->delete();

        // Flash message.
        Session::flash('flash_message', 'Data anggota berhasil dihapus.');
        Session::flash('penting', true);

        return redirect('anggota');
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | CARI
    | -------------------------------------------------------------------------------------------------------
    */
    public function cari(Request $request) {
        $kata_kunci = trim($request->input('kata_kunci'));

        if (! empty($kata_kunci)) {
            $jenis_kelamin = $request->input('jenis_kelamin');
            $id_kelurahan = $request->input('id_kelurahan');

            // Query
            $query = Anggota::where('nama_anggota', 'LIKE', '%' . $kata_kunci . '%');
            (! empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
            (! empty($id_kelurahan)) ? $query->Kelurahan($id_kelurahan) : '';

            $anggota_list = $query->paginate(2);

            // URL Links pagination
            $pagination = (! empty($jenis_kelamin)) ? $anggota_list->appends(['jenis_kelamin' => $jenis_kelamin]) : '';
            $pagination = (! empty($id_kelurahan)) ? $pagination = $anggota_list->appends(['id_kelurahan' => $id_kelurahan]) : '';
            $pagination = $anggota_list->appends(['kata_kunci' => $kata_kunci]);

            $jumlah_anggota = $anggota_list->total();
            return view('anggota.index', compact('anggota_list', 'kata_kunci', 'pagination', 'jumlah_anggota', 'id_kelurahan', 'jenis_kelamin'));
        }

        return redirect('anggota');
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | INSERT TELEPON
    | -------------------------------------------------------------------------------------------------------
    */
    private function insertTelepon(Anggota $anggota, AnggotaRequest $request) {
        $telepon = new Telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $anggota->telepon()->save($telepon);
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | UPDATE TELEPON
    | -------------------------------------------------------------------------------------------------------
    */
    private function updateTelepon(Anggota $anggota, AnggotaRequest $request) {
        if ($anggota->telepon) {
            // Jika telp diisi, update.
            if ($request->filled('nomor_telepon')) {
                $telepon = $anggota->telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $anggota->telepon()->save($telepon);
            }
            // Jika telp tidak diisi, hapus.
            else {
                $anggota->telepon()->delete();
            }
        }
        // Buat entry baru, jika sebelumnya tidak ada no telp.
        else {
            if ($request->filled('nomor_telepon')) {
                $telepon = new Telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $anggota->telepon()->save($telepon);
            }
        }
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | UPLOAD FOTO
    | -------------------------------------------------------------------------------------------------------
    */
    private function uploadFoto(AnggotaRequest $request) {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name   = date('YmdHis'). ".$ext";
            $request->file('foto')->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }

    /*
    | -------------------------------------------------------------------------------------------------------
    | UPDATE FOTO
    | -------------------------------------------------------------------------------------------------------
    */
    private function updateFoto(Anggota $anggota, AnggotaRequest $request) {
        // Jika user mengisi foto.
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada foto baru.
            $exist = Storage::disk('foto')->exists($anggota->foto);
            if (isset($anggota->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($anggota->foto);
            }

            // Upload foto baru.
            $foto = $request->file('foto');
            $ext  = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name   = date('YmdHis'). ".$ext";
                $upload_path = 'fotoupload';
                $request->file('foto')->move($upload_path, $foto_name);
                return $foto_name;
            }
        }
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | HAPUS FOTO
    | -------------------------------------------------------------------------------------------------------
    */
    private function hapusFoto(Anggota $anggota) {
        $is_foto_exist = Storage::disk('foto')->exists($anggota->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete($anggota->foto);
        }
    }


    /*
    | -------------------------------------------------------------------------------------------------------
    | DATE MUTATOR
    | -------------------------------------------------------------------------------------------------------
    */
    public function dateMutator() {
        $anggota = Anggota::findOrFail(1);
        $nama = $anggota->nama_anggota;
        $tanggal_lahir = $anggota->tanggal_lahir->format('d-m-Y');
        $ulang_tahun = $anggota->tanggal_lahir->addYears(30)->format('d-m-Y');
        return "Anggota <strong>{$nama}</strong> lahir pada <strong>{$tanggal_lahir}</strong>.<br>
                Ulang tahun ke-30 akan jatuh pada <strong>{$ulang_tahun}</strong>.";
    }

}