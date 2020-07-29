<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KelurahanRequest;
use App\Kelurahan;
use Session;

class KelurahanController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $kelurahan_list = Kelurahan::all();
        return view('kelurahan/index', compact('kelurahan_list'));
    }

    public function create() {
        return view('kelurahan.create');
    }

    public function store(KelurahanRequest $request) {
        Kelurahan::create($request->all());
        return redirect('kelurahan');
    }

    public function edit(Kelurahan $kelurahan) {
        return view('kelurahan.edit', compact('kelurahan'));
    }

    public function update(Kelurahan $kelurahan, KelurahanRequest $request) {
        $kelurahan->update($request->all());
        return redirect('kelurahan');
    }

    public function destroy(Kelurahan $kelurahan) {
        $kelurahan->delete();
        return redirect('kelurahan');
    }
}
