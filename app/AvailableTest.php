<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTest extends Model
{
    public $table = 'available_tests';

    protected $fillable = [
        'catagory_id',
        'name',
        'testFee',
        'initialNormalValue',
        'finalNormalValue',
        'firstCriticalValue',
        'finalCriticalValue',
        'units',
    ];
    public function catagory()
    {
        return $this->belongsTo(Catagory::class);

    }
    public function testPerformed()
    {
        return $this->hasMany(TestPerformed::class);

    }

}
