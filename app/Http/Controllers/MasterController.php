<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;
use App\Http\Requests\ValidateNewsletterRequest;
use App\Http\Requests\ValidateContactRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function WhoWeAre()
    {
        return view('who-we-are');
    }

    public function Projects()
    {
        return view('who-we-are');
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
    public function news_subscribe(ValidateNewsletterRequest $request)
    {
        /* $test = DB::table('newsletter')->insert([
            'email'     =>  "$request->newsletterEmail",
        ]);

        if ($test) {
            return response()->json(['message' => 'Email Added to Newsletter !'], 200);
        } else {
            return response()->json(['message' => 'Erro Occured'], 500);
        } */

        /*         try {

            $result = DB::table('newsletter')->insert([
                'email'     =>  "$request->newsletterEmail",
            ]);

            if ($result) {
                $ret = response()->json(['message' => 'Email Successful Registered'], 200);
            };
            // Your code to save data to the database
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) { // MySQL error code for duplicate entry
                // Handle duplicate entry error
                // For example, return a response or redirect back with an error message
                // return redirect()->back()->with('error', 'Duplicate entry found.');
                $ret = response()->json(['message' => 'Duplicate entry found...'], 500);
            } else {
                // Handle other database errors
                // For example, log the error or return a generic error message
                // return redirect()->back()->with('error', 'Database error occurred.');
                $ret = response()->json(['message' => 'Database erorr ocurred ...'], 500);
            }
        } */
        $result = DB::table('newsletter')->insert([
            'email'         =>  "$request->newsletterEmail",
            'created_at'    => now(),
        ]);

        if ($result) {
            $ret = response()->json(['message' => 'Email Successful Registered'], 200);
        };
        return $ret;
    }

    public function contact_form(ValidateContactRequest $request)
    {

        $email = DB::table('contactform')
            ->where('email', $request->email)
            ->where('status', 'pending')
            ->value('email');

        if ($email) {
            $ret = response()->json(['message' => 'There is an ongoing Contact that still pending. Please Allow us to process your first Request'], 500);
            return $ret;
        } else {

            $result = DB::table('contactform')->insert([
                'name'          =>  "$request->name",
                'email'         =>  "$request->email",
                'subject'       =>  "$request->subject",
                'message'       =>  "$request->message",
                'contact_received_at'    => now(),
            ]);

            if ($result) {
                $ret = response()->json(['message' => 'Contact registered. We shall revert within 48hrs.'], 200);
            };
            return $ret;
        }
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
    /*  public function update(Request $request, string $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
