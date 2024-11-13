<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Unit;

class TenantController extends Controller
{
    public function index()
    {
        return view('tenants.index')->with('tenants', Tenant::all()->sortByDesc('contract_end_date'));
    }

    public function show(Tenant $tenant)
    {
        return view('tenants.show')->with('tenant', $tenant);
    }

    public function add(Request $request)
    {
        // Check if the 'search' parameter exists in the GET request
        if ($request->has('search')) {
            $searchValue = $request->input('search');

            // Implement logic to check if the search value is valid or found
            $tenant = User::where('email', $searchValue)
                ->orWhere('mobile', $searchValue)
                ->first();

            if ($tenant) {
                // If the tenant is found, show the view with search results
                return view('tenants.found')
                    ->with('user', $tenant)
                    ->with('units', Unit::all()->pluck('name', 'id'));
            } else {
                // If not found, set a session flash message and redirect
                return redirect()->route('tenants.add') // Replace with the appropriate route name if needed
                ->with('error', 'Tenant not found');
            }
        }

        // Default logic for when 'search' is not present
        return view('tenants.add');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'unit_id' => 'required|exists:units,id',
            'contract_start_date' => 'required|date',
            'contract_end_date' => 'required|date',
        ]);

        if (Unit::find($request->input('unit_id'))->tenants->where('contract_end_date', '>', now())->count() > 0) {
            return redirect()->route('tenants.add')
                ->with('error', 'Unit is already occupied');
        }

        $tenant = Tenant::create([
            'user_id' => $request->input('user_id'),
            'unit_id' => $request->input('unit_id'),
            'contract_start_date' => $request->input('contract_start_date'),
            'contract_end_date' => $request->input('contract_end_date'),
        ]);
        // Set a session flash message and redirect
        return redirect()->route('tenants.show', ['tenant' => $tenant->id])
            ->with('success', 'Tenant added successfully');
    }
}
