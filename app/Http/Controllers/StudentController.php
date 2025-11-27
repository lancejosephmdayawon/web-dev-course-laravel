<?php

namespace App\Http\Controllers;

use App\Http\Requests\registrationRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function store(registrationRequest $request)
    {
        Log::info('================>>>> ENTER STUDENT CONTROLLER ');
        // Validate input

        // $validated = $request
        //->validate([
        // 'emailAddress' => ['required', 'email', 'min:10', 'max:10', 'ends_with:@iskolarngbayan.pup.edu.ph'],
        // 'firstName' => ['required', 'min:1'],
        // 'middleName' => ['nullable', 'string', 'min:1', 'max:4', 'ends_with:.'],
        // 'lastName' => 'required|string|max:50',
        // 'date' => 'required|date',
        //  ], [
        // 'emailAddress.max' => 'Sobra!',
        // 'emailAddress.ends_with' => 'Dapat sakto sa format! @iskolarngbayan!'
        //  ]);
        $age = $this->calculateAge($request->input('date'));

        Log::info('Validated data:' . $request->input('firstName'));
        Log::info('Age: ' . $age);

        //dd($validated);
        //   Log::debug('Email: ' . $validated['emailAddress']);
        // Return success message
        //return redirect()->back()->with('success', 'Student information submitted successfully!');
        // Pass data to show.blade.php
        DB::table('user')->insert([
            'first_name' => $request['firstName'],
            'last_name' => $request['lastName'],
            'middle_name' => $request['middleName'],
            'email' => $request['emailAddress'],
            'role_id' => 1

        ]);

        return view('shows', [
            'firstName' => $request['firstName'],
            'middleName' => $request['middleName'],
            'lastName' => $request['lastName'],
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
