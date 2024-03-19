<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    use HasFactory;
    protected $fillable = ["nome"];

    // Referenciar chave_primaria
    // protected $primaryKey = 'id';

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id', 'id');
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('id', 'Desc');
        });
    }

}
