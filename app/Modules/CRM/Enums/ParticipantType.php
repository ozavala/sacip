<?php

namespace App\Modules\CRM\Enums;

enum ParticipantType: string
{
    case Person = 'person';
    case Organization = 'organization';
}
