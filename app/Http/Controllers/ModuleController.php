<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Events\ModuleCreated;
use Illuminate\Foundation\Auth\User;
use App\Notifications\NewModuleNotification;

class ModuleController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $modules = Module::all();
        $modules = Module::paginate(7);
        return view('modules.index', compact('modules'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('modules.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'code_module' => 'required|string|max:10|unique:modules',
            'libelle_module' => 'required|string',
            'masse_hor_presentielle' => 'required|integer',
            'masse_hor_distantielle' => 'required|integer',
            'bilan_compet_module' => 'required|string|max:20',
        ]);

        Module::create($request->all());
        // event(new ModuleCreated($module));


        // $users = User::all();
        // foreach ($users as $user) {
        //     $user->notify(new NewModuleNotification($module));
        // }

        return redirect()->route('modules.index')
            ->with('success', 'Module created successfully.');
    }

    // Display the specified resource.
    public function show(Module $module)
    {
        return view('modules.show', compact('module'));
    }

    // Show the form for editing the specified resource.
    public function edit(Module $module)
    {
        return view('modules.edit', compact('module'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'code_module' => 'required|string|max:10|unique:modules,code_module,' . $module->id,
            'libelle_module' => 'required|string',
            'masse_hor_presentielle' => 'required|integer',
            'masse_hor_distantielle' => 'required|integer',
            'bilan_compet_module' => 'required|string|max:20',
        ]);

        $module->update($request->all());

        return redirect()->route('modules.index')
            ->with('success', 'Module updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('modules.index')
            ->with('success', 'Module deleted successfully.');
    }
}

