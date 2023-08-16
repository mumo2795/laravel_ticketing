<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index() {

        $tickets = Ticket::all();

        return view('ticket',[
            'tickets' => $tickets
        ]);
    }

    public function create() {

        return view('form');
    }

    public function store(Request $request){

        // Validate the input attributes
        $request->validate([
            'department_id',
            'ticket_type',
            'warehouse' => 'required',
            'location' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'body' => 'required'
        ]);

        // Create the ticket
        Ticket::create([
            'department_id' => $request->department_id,
            'ticket_type' => $request->ticket_type,
            'warehouse' => $request->warehouse,
            'location' => $request->location,
            'category' => $request->category,
            'sub_category' => $request->sub_category,
            'body' => $request->body
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ticket has been created successfully.');

    }
}
