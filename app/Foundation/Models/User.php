<?php

namespace App\Foundation\Models;

use Laravel\Scout\Searchable;

class User extends \App\Models\User
{
    use Searchable;

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray()
    {
        return array_merge($this->toArray(), [
            'id'         => (string) $this->id,
            'name'       => $this->name,
            'email'      => $this->email,
            'created_at' => $this->created_at->timestamp,
        ]);
    }
}
