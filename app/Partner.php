<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    
	public $incrementing = false; 
	protected $casts = [
		'created_at' => 'datetime:Y-m-d H:i:s',
		'updated_at' => 'datetime:Y-m-d H:i:s',
	];
	
	protected $fillable = ['id','type','name','address','phone','description','status','created_by','updated_by'];
	
	public function creator(){
        return $this->belongsTo('App\User','created_by','nrp');
    }

    public function editor(){
        return $this->belongsTo('App\User','updated_by','nrp');
    }
}