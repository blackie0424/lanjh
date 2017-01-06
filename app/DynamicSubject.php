<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicSubject extends Model
{

    public $timestamps = false;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    						'origin_period','origin_date','origin_teacher_id','origin_subject_id','origin_class_id',
    						'transferred_period','transferred_date','transferred_period','transferred_teacher_id',
    						'transferred_subject_id','transferred_class_id'
    						];
}
