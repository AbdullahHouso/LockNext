<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function isOccupied() {
        return $this->tenants->where('contract_end_date', '>', now())->where('status', 'active')->count() > 0;
    }

    public function activeTenant() {
        if($this->isOccupied()) {
            return $this->tenants->where('contract_end_date', '>', now())->where('status', 'active')->first();
        } else return null;
    }

    public function tenants()
    {
        return $this->hasMany(Tenant::class);
    }
}
