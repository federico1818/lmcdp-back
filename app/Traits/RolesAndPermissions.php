<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Role;

trait RolesAndPermissions
{
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id');
    }

    public function hasPermission(String $permissionName): bool
    {   
        return $this->roles->contains(function ($role) use ($permissionName) {
            return $role->hasPermission($permissionName);
        });
    }
    
    public function hasRole(String $roleName): bool
    {
        return $this->roles->contains(function ($role) use ($roleName) {
            return $role->name == $roleName;
        });
    }
}