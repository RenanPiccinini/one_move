<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $guarded = [];

    protected $casts = [
        'distances' => 'array',
        'lots' => 'array',
        'kit_pickup' => 'array',
        'schedule' => 'array',
        'map_coords' => 'array',
        'is_featured' => 'boolean',
        'date' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function isOpen(): bool
    {
        return $this->status === 'open';
    }

    public function isSoon(): bool
    {
        return $this->status === 'soon';
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            'open' => 'Inscrições Abertas',
            'soon' => 'Em Breve',
            'closed' => 'Encerrada',
            default => 'Em Breve'
        };
    }
}
