<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns = ['clientName','phone', 'email','website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $client = new Client();
        // $client->clientName = $request->clientName;
        // $client->phone = $request->phone;
        // $client->email = $request->email;
        // $client->website = $request->website;
        // $client->save();
        $messages = $this->errMsg();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required|max:30',
            'image' => 'required',
        ],$messages);
        
        $imgExt = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;
        $path = 'assets/images';
        $request->image->move($path, $fileName);

        $data['image'] = $fileName;

        $data['active'] = isset($request->active);
        Client::create($data);
        return redirect('clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClients', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->errMsg();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
        ], $messages);
        Client::where('id', $id)->update($data);
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id',$id)->delete();
        return redirect('clients');
    }

     /**
     * Force Delete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::where('id',$id)->forceDelete();
        return redirect('trashedClients');
    }

    /**
     * Trash.
     */
    public function trash()
    {
        $trashed = Client::onlyTrashed()->get();
        return view('trashedClients', compact('trashed'));
    }

    /**
     * Restore.
     */
    public function restore(string $id)
    {
        Client::where('id',$id)->restore();
        return redirect('clients');
    }

    public function errMsg(){
        return [
            'clientName.required' => 'The client name is missed, please insert',
            'clientName.min' => 'length less than 5, please insert more chars',
        ];
    }
}