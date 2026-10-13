<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'direccion'
    ];

    public function materiales(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
