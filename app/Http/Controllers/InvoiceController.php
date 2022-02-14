<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $customer = \App\Models\Customer::where('customer_id', $request->cid)
        //  //   ->where('periode', '=', $mount)
        //      //->where('monthly_fee', '=', 1)

        //   // ->where('payment_status', '!=', 1)
        // ->first();



        $customer = \App\Models\Customer::where('customer_id', $request->cid)

        ->Join('statuscustomers', 'customers.id_status', '=', 'statuscustomers.id')
        ->Join('plans', 'customers.id_plan', '=', 'plans.id')
        ->select('customers.*','statuscustomers.name as status_name','plans.name as plan_name','plans.price as plan_price')->first();
    //$customer = \App\customer::findOrFail($id);
          // dd ($invoice);
        if($customer)
        {
        $suminvoice = \App\Models\Suminvoice::where('id_customer', $customer->id)->where("payment_status", 0)->get();

        // dd ($suminvoice);
        return view ('invoice/show',['suminvoice' =>$suminvoice, 'customer'=>$customer]);
    }
    else
    {
        return view ('/home',['msg' =>"Data Customer tidak ditemukan, pastikan kode pelanggan sudah sesuai dan silahkan menghubungi admin Trikamedia jika diperlukan"]);
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
