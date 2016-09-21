<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model {

	protected $table = 'array_records';
	public $timestamps = true;
	protected $fillable = array('record_jobtype', 'record_gst', 'record_metalfinish_id', 'record_mode');

	public function metalFinish()
	{
		return $this->hasOne('App\Metalfinish');
	}

}