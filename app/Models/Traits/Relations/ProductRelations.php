<?php

namespace App\Models\Traits\Relations;
use App\Models\Category;
use App\Models\Remains;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
trait ProductRelations
{
    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
    public function remains(): HasOne
    {
        return $this->hasOne(Remains::class);
    }
}
