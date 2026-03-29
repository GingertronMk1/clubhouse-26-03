<?php

namespace App\Models;

use App\UserTypeEnum;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClubUser extends Pivot
{
    protected function casts(): array
    {
        return [
            'type' => UserTypeEnum::class,
        ];
    }
    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
