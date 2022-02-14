<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
     
     public function balanceinv($id,$id_customer)
    {
    	
    	   $balance = $this->select(\DB::raw('SUM((qty * amount)) as total'))
         ->where('id_customer', '=', $id_customer)
    	  ->where('tempcode', $id)->first();
              //  dd($balance['total']);
         return $balance['total'];
         
    }
}
