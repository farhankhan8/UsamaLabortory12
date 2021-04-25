<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Role1 extends Model
{
    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(Ahmed::class, 'role1_ahmeds');
    }
}