<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use GuzzleHttp\Exception\GuzzleException;
Use GuzzleHttp\clients;

use Xendit\Xendit;

class Suminvoice extends Model
{
    use HasFactory;
     use SoftDeletes;

    public function customer()
    {
        return $this->belongsTo('\App\Models\Customer', 'id_customer');
    }
    public function bank()
    {
        return $this->belongsTo('\App\Models\Bank', 'payment_point');
    }
 public function user()
    {
        return $this->belongsTo('\App\Models\User', 'updated_by');
    }

     public static function wa_payment_g($phone, $message)
    {
         if (env('WAPISENDER_STATUS')!="disable")
        {

        $client = new Clients(); 
        $result = $client->post(env('WAPISENDER_SEND_MESSAGE'), [
            'form_params' => [
                'key' => env('WAPISENDER_KEY'),
                'device' => env('WAPISENDER_PAYMENT'),
        // 'group_id' => '3013',
                'group_id' =>env('WAPISENDER_GROUPPAYMENT'),
                'message' => $message,
            ]
        ]);

       // echo $result->getStatusCode();
        // 200
       $result= $result->getBody();
         $array = json_decode($result, true);
        return ( $array['status'].' - '.$array['message']);
    }
    else
    {
        return "WA Disabled";
    }
    }

    public static function wa_payment($phone, $message)
    {
         if (env('WAPISENDER_STATUS')!="disable")
        {

        $client = new Clients(); 
        $result = $client->post(env('WAPISENDER_SEND_MESSAGE'), [
            'form_params' => [
                'key' => env('WAPISENDER_KEY'),
                'device' => env('WAPISENDER_PAYMENT'),
        // 'group_id' => '3013',
                'destination' => $phone,
                'message' => $message,
            ]
        ]);

       // echo $result->getStatusCode();
        // 200
       $result= $result->getBody();
         $array = json_decode($result, true);
        return ( $array['status'].' - '.$array['message']);
    }
         else
    {
        return "WA Disabled";
    }
    }
}
