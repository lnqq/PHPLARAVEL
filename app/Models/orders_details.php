<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders_details extends Model
{
    protected $table = "orders_details";
	protected $guarded = ['id'];   
	protected $timestamp = true;

	public function product()
	{
		return $this->belongsTo('App\Models\products','product_id');
	}
	public function orders()
	{
		return $this->belongsTo('App\Models\orders','order_id');
	}
}
