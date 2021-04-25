<?php

namespace App;
// use App\Catagory;
// use App\AvailableTest;
// use App\TestPerformed;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public $table = 'catagories';

    protected $fillable = [
        'name',
    ];
    public function availableTest()
    {
        return $this->hasMany(AvailableTest::class);

    }
    // public function cata()
    // {
    //     return $this->hasMany(AvailableTestPatient::class);

    // }
  

}
