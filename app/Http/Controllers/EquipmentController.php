<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        
        return view('inventory.index', ['equipment' => $equipment]);
    }

    public function create()
    {
        return view('inventory.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'serial_number' => 'required|unique:equipment',
        ]);

        Equipment::create($request->all());

        return redirect()->route('index')->with('success', 'Equipment added successfully.');
    }
    public function destroy($id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();

        return redirect()->route('index')->with('success', 'Equipment deleted successfully.');
    }
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('inventory.edit', compact('equipment'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'serial_number' => 'required|unique:equipment,serial_number,' . $id,
            'status' => 'required',
        ]);

        $equipment = Equipment::findOrFail($id);
        $equipment->update($request->all());

        return redirect()->route('index')->with('success', 'Equipment updated successfully.');
    }
}
