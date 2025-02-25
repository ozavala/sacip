<?php

namespace App\Modules\CRM\Enums;

use App\Modules\CRM\Enums\OrganizationType;

enum OrganizationType: string
{
    case Customer = 'customer';
    case Vendor = 'vendor';
    case Partner = 'partner';
    case Prospect = 'prospect';
    case Internal = 'internal'; // Your own company
}
