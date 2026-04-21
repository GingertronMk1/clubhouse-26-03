<?php

namespace App\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasDefaultOrder
{
    protected static function bootHasDefaultOrder(): void
    {
        static::addGlobalScope(
            'order',
            fn (Builder $builder) => $builder->orderBy(...static::getDefaultOrder())
        );
    }

    /**
     * @return string[] An array of two strings; the first the column by which to order, the second the direction.
     */
    protected static function getDefaultOrder(): array
    {
        return ['created_at', 'desc'];
    }
}
