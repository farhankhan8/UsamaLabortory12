<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $table = 'statuses';

    protected $fillable = [
        'status',
        

      
    ];

    //  public function testt()
    //  {
    //      return $this->belongsTo(Test::class);
    //  }
     
    //  public function availableTest()
    //  {
    //      return $this->belongsTo(AvailableTest::class);
    //  }
    //  public function catagory1()
    //  {
    //      return $this->belongsTo(Catagory::class,'id');
    //  }

}
