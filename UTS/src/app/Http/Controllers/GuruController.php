<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
     public function index(Request $request)
    {
          $query = Guru::query();

            if ($request->has('search')) {
                $query->where(function ($q) use ($request) {
                    $q->where('nama', 'like', '%' . $request->search . '%')
                    ->orWhere('nip', 'like', '%' . $request->search . '%');
                });
            }

            if ($request->jenis_kelamin) {
                $query->where('jenis_kelamin', $request->jenis_kelamin);
            }

            if ($request->status_kepegawaian) {
                $query->where('status_kepegawaian', $request->status_kepegawaian);
            }

            $gurus = $query->paginate(10); // Atau get() kalau tidak pakai pagination

            return view('components.gurus.index', compact('gurus'));
    }
}
