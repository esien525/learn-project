<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name','description','publish_date'];
    
    public function setPublishDateAttribute($date)
    {
		$this->attributes['publish_date'] = Carbon::createFromFormat('Y-m-d',$date);
	}
	
	public function getPublishDateAttribute($date)
	{
        return Carbon::parse($date)->format('d/M/Y')." , ".Carbon::parse($date)->diffForHumans();
    }
}
