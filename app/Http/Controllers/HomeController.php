<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect()
    {
        // dd('here');
        if (auth()->check()) {
            $userType = auth()->user()->user_type;

            switch ($userType) {
                case 'admin':
                    dd('admin');
                    return view('Admin.index');
                case 'vendor':
                    dd('vender');
                    return redirect()->route('vendor.dashboard');
                case 'customer':
                    dd('customer');
                    return redirect()->route('customer.dashboard');
                default:
                    return view('dashboard');
            }
        }

        return '/'; // Default path when the user is not authenticated
    }

    public function index()
    {
        return view('Frontend.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
