<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        return response()->json(Agenda::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $agenda = Agenda::create($validated);

        return response()->json($agenda, 201);
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return response()->json($agenda, 200);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->update($validated);

        return response()->json($agenda, 200);
    }

    public function destroy($id)
    {
        Agenda::destroy($id);
        return response()->json(null, 204);
    }
}
