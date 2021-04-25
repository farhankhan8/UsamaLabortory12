<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestPerformed extends Model
{
    public $table = 'test_performeds';

    protected $fillable = [
        'available_test_id',
        'patient_id',
        'start_time',
        'state',
        'testResult',
      
    ];
     public function patients()
     {
         return $this->belongsTo(Patient::class);

     }
     public function available_tests()
     {
         return $this->belongsTo(AvailableTest::class);

     }
  
}
