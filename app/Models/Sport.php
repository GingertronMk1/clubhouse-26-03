<?php

namespace App\Models;

use Database\Factories\SportFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['name', 'description', 'scoring'])]
class Sport extends Model
{
    /** @use HasFactory<SportFactory> */
    use HasFactory;

    use HasUuids;
    use SoftDeletes;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'scoring' => 'json',
        ];
    }
}
