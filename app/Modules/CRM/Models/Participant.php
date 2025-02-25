<?php

namespace App\Modules\CRM\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
use App\Modules\CRM\Enums\ParticipantType;
use App\Enums\CRM\Enums\OrganizationType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'participant_type',
        'organization_type'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'participant_role', 'participant_id', 'role_id');
    }

     // Example: Get all participants with a specific role
     public static function withRole(string $roleName) {
        $role = Role::where('name', $roleName)->firstOrFail();
        return $role->participants();
    }

    protected $casts = [
        'participant_type' => ParticipantType::class,// casts to the enum
        'organization_type' => OrganizationType::class,// casts to the enum
    ];

    /**
     * A full name attribute accessor.
     * 
     * If the participant is a person, returns the first name and last name
     * concatenated with a space and trimmed. Otherwise, returns the company name.
     * 
     * @return string
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->participant_type === ParticipantType::Person ? 
            trim($this->first_name.' '. $this->last_name) : $this->company_name,
        );
    }
}
