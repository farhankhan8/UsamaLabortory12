<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $table = 'patients';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'start_time',
        'gend',
        'dob',
        'catagory',


      
    ];



//      public function available_tests()
//  {
//      return $this->belongsToMany(AvailableTest::class,'available_test_patients')->withPivot('available_test_id','patient_id');
//  }
 public function available_tests()
 {
     return $this->hasMany(AvailableTest::class);

 }

// public function avaiTestPat()
// {
//     return $this->hasOne(AvailableTestPatient::class,'available_test_patients')->withPivot('available_test_id','patient_id');
// }
// public function availabl()
// {
//     return $this->belongsTo(TestPerformed::class,'patient_id','id');
// }
 

}
