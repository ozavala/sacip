<?php

namespace App\Modules\CRM\Enums;



enum RoleType: string
{
    
    case customs_agent = 'customs agent';
    case transport_agent = 'transport agent';
    case client = 'client';
    case contractor = 'contractor';
    case employee = 'employee';
    case employer = 'employer';
    case dealer = 'dealer';
    case provider = 'provider';
    case seller = 'seller';
    case shipper = 'shipper';
}
