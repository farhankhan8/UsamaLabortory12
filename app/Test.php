<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'tests';

    protected $fillable = [
        'start_time',
        'state',
        'testResult'
      
    ];

    // public function patient()
    // {
    //     return $this->belongsToMany(Patient::class);
    // }
     
    public function availableTest()
    {
        return $this->belongsTo(AvailableTest::class);
    }
    // public function catagory1()
    // {
    //     return $this->belongsTo(Catagory::class,'id');
    // }

    public function patient()
    {
        return $this->belongsToMany(Patient::class);
    }

}