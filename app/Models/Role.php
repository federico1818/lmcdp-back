<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }

    public function hasPermission(String $permissionName): bool
    {
        if($this->name == 'root')
            return true;
        
        return $this->permissions->contains('name', $permissionName);
    }
}
