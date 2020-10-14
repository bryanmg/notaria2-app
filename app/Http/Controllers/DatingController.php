<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Dating;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ozparr\AdminlteUsers\Models\Rol;

class DatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datings = Dating::with(['customer', 'customer.user'])->get();
        return view('dating.index', compact('datings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::with('customers')->where('rol_id', Rol::CUSTOMER_ID)->get();
        return view('dating.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::where('user_id',$request->user_id)->first();
        $dating = new Dating();
        $dating->dating_time = $request->dating_time;
        $dating->name = $request->name;
        $dating->description = $request->description;
        $dating->customer_id = $customer->id;
        $dating->save();
        return redirect('datings')->with('message', 'Cita creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::with('customers')->where('rol_id', Rol::CUSTOMER_ID)->get();
        $dating = Dating::find($id);
        $dating->dating_time = Carbon::parse($dating->dating_time)->format('Y-m-d\TH:i');
        $customer = Customer::find($dating->customer_id);
        return view('dating.edit', compact('users', 'dating', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dating::destroy($id);
        return redirect('datings')->with('message', 'Cita eliminada');
    }
}
