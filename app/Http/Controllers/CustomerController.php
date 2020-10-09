<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\DataTables\CustomersDataTable;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CustomersDataTable $dataTable
     * @return \Illuminate\Http\Response
     */
    public function index(CustomersDataTable $dataTable)
    {
        // return view('customer.index');
        return $dataTable->render('customer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateCustomer = Validator::make($request->all(),
            [
                'email' => 'required|unique:users',
            ],
            [
                'email.required' => 'El Email es requerido',
                'email.unique' => 'Este Email ya existe',
            ]
        );
        if ($validateCustomer->fails()) {
            return redirect()->back()->withErrors($validateCustomer)->withInput();
        }
        $user = new User();
        $user->rol_id = Role::CUSTOMER_ID;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($user->email);
        $user->save();

        $customer = new Customer();
        $customer->lastname = $request->lastname;
        $customer->birthplace = $request->birthplace;
        $customer->birthdate = $request->birthdate;
        $customer->adress = $request->adress;
        $customer->phone = $request->phone;
        $customer->curp = $request->curp;
        $customer->rfc = $request->rfc;
        $customer->job = $request->job;
        $customer->civil_status = $request->civil_status;
        $customer->user_id = $user->id;
        $customer->save();
        return redirect('customers/create')->with('message', 'Cliente creado correctamente');
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
        //
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
        //
    }
}
