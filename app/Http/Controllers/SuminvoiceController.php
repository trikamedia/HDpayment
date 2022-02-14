<?php

namespace App\Http\Controllers;
Use GuzzleHttp\clients;
use Xendit\Xendit;
use Exception; 
use Illuminate\Http\Request;

class SuminvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        
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
    public function mytransaction()
    {
        //
         $suminvoice = \App\models\Suminvoice::orderBy('updated_at', 'ASC')
        ->where('updated_by','=',  \Auth::user()->id)

        ->whereBetween('payment_date',[(date('Y-m-1')), (date('Y-m-d'))])
        ->get();
        
        
        return view ('suminvoice/mytransaction',['suminvoice' =>$suminvoice]);
    }
    public function show($id)
    {
        {
        //
        //dd($id);
        $bank = \App\Models\Bank::pluck('name', 'id');
        $mount = now()->format('mY');
        $invoice = \App\Models\Invoice::where('tempcode', $id)
                  
           ->where('payment_status', '=', 3)
           ->get();
        
           if (empty($invoice[0])){
          
         return abort(404);
}
else
{
            $invoice_code = \App\Models\Invoice::where('tempcode', $id)->first();
            $suminvoice_number = \App\Models\Suminvoice::where('tempcode', $id)->first();
            $customer = \App\Models\Customer::where('customers.id', $invoice_code->id_customer)
    
    ->Join('statuscustomers', 'customers.id_status', '=', 'statuscustomers.id')
    ->Join('plans', 'customers.id_plan', '=', 'plans.id')
    ->select('customers.*','statuscustomers.name as status_name','plans.name as plan_name','plans.price as plan_price')
    // ->withTrashed()
    ->first();
    return view ('suminvoice/show',['invoice' =>$invoice, 'customer'=>$customer, 'bank'=>$bank, 'suminvoice_number' => $suminvoice_number]);
}

    }
    }
  public function searchmytransaction(Request $request)
    {
        //
        $date_from = ($request['date_from']);
        $date_end = ($request['date_end']);
        


         $suminvoice = \App\Models\Suminvoice::orderBy('payment_date', 'ASC')
        //->whereNotNull('updated_by')
        ->where('updated_by','=',  \Auth::user()->id)
        ->whereBetween('payment_date',[($request['date_from']), ($request['date_end'])])
        ->get();
    
   
        
        //dd ($suminvoice);
        return view ('suminvoice/mytransaction',['suminvoice' =>$suminvoice,'date_from'=>$date_from, 'date_end'=>$date_end ]);
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


       $query = \App\Models\Suminvoice::where('id', $id)
            ->update([
                'recieve_payment' => $request->recieve_payment,
                'payment_point' => $request->payment_point,
                'note' => $request->note,
                'updated_by' => $request->updated_by,
                  'payment_status' =>1,
                   'payment_date' =>now()->toDateTimeString(),


            ]);
           

           if ($query)
           {
             return redirect ('/suminvoice/'. $request->tempcode)->with('info',"Payment Successfully");
           }
           else
           {
            return redirect ('/suminvoice/'. $request->tempcode)->with('warning','Item updated Failed');
           }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

          public function dotmatrix($id)
    {
        //
        $bank = \App\Models\Bank::pluck('name', 'id');
        $mount = now()->format('mY');
           $invoice = \App\Models\Invoice::where('tempcode', $id)        
           ->where('payment_status', '=', 3)
           ->get();

           if (empty($invoice[0])){
          
         return abort(404);
}
else
{
           $invoice_code = \App\Models\Invoice::where('tempcode', $id)->first();
            $suminvoice_number = \App\Models\Suminvoice::where('tempcode', $id)->first();
           $customer = \App\Models\Customer::where('customers.id', $invoice_code->id_customer)
    
    ->Join('statuscustomers', 'customers.id_status', '=', 'statuscustomers.id')
    ->Join('plans', 'customers.id_plan', '=', 'plans.id')
    ->select('customers.*','statuscustomers.name as status_name','plans.name as plan_name','plans.price as plan_price')
    ->withTrashed()
    ->first();
    return view ('suminvoice/dotmatrix',['invoice' =>$invoice, 'customer'=>$customer, 'bank'=>$bank, 'suminvoice_number' => $suminvoice_number]);
 }
}


        public function print($id)
    {
        //
        $bank = \App\Models\Bank::pluck('name', 'id');
        $mount = now()->format('mY');
           $invoice = \App\Models\Invoice::where('tempcode', $id)
                   
           ->where('payment_status', '=', 3)
           ->get();
           if (empty($invoice[0])){
          
         return abort(404);
}
else
{

           $invoice_code = \App\Models\Invoice::where('tempcode', $id)->first();
            $suminvoice_number = \App\Models\Suminvoice::where('tempcode', $id)->first();
           $customer = \App\Models\Customer::where('customers.id', $invoice_code->id_customer)
    
    ->Join('statuscustomers', 'customers.id_status', '=', 'statuscustomers.id')
    ->Join('plans', 'customers.id_plan', '=', 'plans.id')
    ->select('customers.*','statuscustomers.name as status_name','plans.name as plan_name','plans.price as plan_price')
    ->withTrashed()
    ->first();
    return view ('suminvoice/print',['invoice' =>$invoice, 'customer'=>$customer, 'bank'=>$bank, 'suminvoice_number' => $suminvoice_number]);
   }
    }

        public function updated(Request $request, $id)
    {
        
       $query = \App\Models\Suminvoice::where('id', $id)
            ->update([
                'recieve_payment' => $request->recieve_payment,
                'payment_point' => $request->payment_point,
                'note' => $request->note,
                'updated_by' => $request->updated_by,
                  'payment_status' =>1,
                   'payment_date' =>now()->toDateTimeString(),


            ]);
           
            if($query)
            {
                 Xendit::setApiKey(env('XENDIT_KEY'));
                 $id = $request->payment_id;

                 $expireInvoice = \Xendit\Invoice::expireInvoice($id);
               

                 if ($expireInvoice)
                 {
                    $msg ="Success Set Online invoice to Expired";
                 }
                 else
                 {
                    $msg ="Failed Set Online invoice to Expired";

                 }

    
     $customers = \App\Models\Customer::Where('id',$request->id_customer)->withTrashed()->first();
     $active_invoice = \App\Models\Suminvoice::where('payment_status', '=', '0' )
      ->where ('id_customer', '=', $request->id_customer )
        ->count();
        
      if (($customers->id_status ==4 ) AND ($active_invoice <= 0 ))
      {

 $distrouter = \App\Models\Distrouter::withTrashed()->Where('id',$customers->id_distrouter)->first();
            \App\Models\Customer::where('id', $request->id_customer)->update([
                'id_status' => 2,

            ]);
             \App\Models\Distrouter::mikrotik_enable($distrouter->ip,$distrouter->user,$distrouter->password,$distrouter->port,$customers->customer_id);

      }


         




       $customers = \App\Models\Customer::Where('id',$request->id_customer)->withTrashed()->first();
    
       $message ="Yth. ".$customers->name." ";
       $message .="\n";
       $message .="\nTerimakasih, Pembayaran tagihan Customer dengan CID ".$customers->customer_id." sudah kami *TERIMA* ";
       $message .="\nUntuk info lebih lengkap silahkan klik link";
       $message .="\nhttp://".env("DOMAIN_NAME")."/suminvoice/".$request->tempcode."/print";

       $message .="\n* Payment System Trikamedia *";

       $msg .="\n Wa to Customer : " .\App\Models\Suminvoice::wa_payment($customers->phone,$message);
       
      $notif_group ="Offline Payment ";
      $notif_group .="\n";
      $notif_group .="\nPembayaran tagihan dari CID".$customers->customer_id." ( ".$customers->name." )  Sudah DITERIMA";
      $notif_group .="\nCheck : http://".env("DOMAIN_NAME")."/invoice/".$request->tempcode;
      $notif_group .="\n";
      $notif_group .="\n* Payment System Trikamedia *";
      $msg .="\n Wa to Payment Group :" .\App\Models\Suminvoice::wa_payment_g($customers->phone,$notif_group);

        return redirect ('/suminvoice/'. $request->tempcode)->with('info',$msg);
    }
    else
    {
        return redirect ('/suminvoice/'. $request->tempcode)->with('warning',' Update Data Field');
    }
    }

    public function destroy($id)
    {
        //
    }
}
