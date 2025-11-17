<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('student');
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
        Log::info('================>>>> ENTER STUDENT CONTROLLER ');
        // Validate input
        $validated = $request->validate([
            'emailAddress' => 'required|email',
            'firstName' => 'required|string|max:50',
            'middleName' => 'nullable|string|max:50',
            'lastName' => 'required|string|max:50',
            'date' => 'required|date',
        ]);
        $age = $this->calculateAge($request->input('date'));

        Log::info('Validated data:', $validated);
        Log::info('Age: ' . $age);

        //dd($validated);
        Log::debug('Email: ' . $validated['emailAddress']);
        // Return success message
        //return redirect()->back()->with('success', 'Student information submitted successfully!');
        // Pass data to show.blade.php
        return view('show', [
            'firstName' => $validated['firstName'],
            'middleName' => $validated['middleName'],
            'lastName' => $validated['lastName'],
            'age' => $age,
        ]);
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

    //private functions
    private function calculateAge($date)
    {
        $birthdate = Carbon::parse($date);
        $today = Carbon::now();

        $age = $birthdate->diff($today);

        return $age->y;
    }
}
