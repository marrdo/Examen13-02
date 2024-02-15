<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    protected $hidden = [
      'id',
      'created_at',
      'updated_at'
  ];

    public function monumentos(): HasMany{
      return $this->hasMany(Monumento::class);
    }
}
