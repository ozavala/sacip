<?php

namespace App\Modules\CRM\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function participants()
    {
        return $this->belongsToMany(Participant::class, 'participant_role');
    }
}
