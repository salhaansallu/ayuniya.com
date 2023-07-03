<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $response = array();
        if (countryVerify($request->input("country"))) {
            $msg = new Messages();
            $msg->name = $request->input("name");
            $msg->email = $request->input("email");
            $msg->number = $request->input("number");
            $msg->country = $request->input("country");
            $msg->message = $request->input("message");
            if ($msg->save()) {
                $response = array(
                    "error" => "0",
                    "msg" => "Message sent successfully. We'll contact you ASAP!",
                );
            } else {
                $response = array(
                    "error" => "1",
                    "msg" => "Sorry! Something went wrong. Please try again later.",
                );
            }
        }
        else {
            $response = array(
                "error" => "1",
                "msg" => "Invalid country.",
            );
        }

        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
