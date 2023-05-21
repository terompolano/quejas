<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class QuejaController extends Controller
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'celphone' => 'required',
            'email' => 'required',
            'names' => 'required',
            'charge' => 'required',
            'dependences' => 'required',
            'note' => 'required',
            'narration' => 'required',
            'firma' => 'required'
        ]);
    
        // Guardar la queja en la base de datos
        $queja = new Queja();
        $queja->name = $request->input('name');
        $queja->address = $request->input('address');
        $queja->phone = $request->input('phone');
        $queja->celphone = $request->input('celphone');
        $queja->email = $request->input('email');
        $queja->names = $request->input('names');
        $queja->charge = $request->input('charge');
        $queja->dependences = $request->input('dependences');
        $queja->note = $request->input('note');
        $queja->narration = $request->input('narration');
        $queja->firma = $request->input('firma');
        $queja->save();
    
        // Enviar el correo electrónico
        Mail::send('emails.queja', ['queja' => $queja], function ($message) use ($request) {
            $message->to('destinatario@example.com')
                ->subject('Nueva queja')
                ->from($request->input('email'), $request->input('name'));
        });
    
        return redirect()->back()->with('success', '¡La queja se ha enviado correctamente y se ha guardado en la base de datos!');
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
