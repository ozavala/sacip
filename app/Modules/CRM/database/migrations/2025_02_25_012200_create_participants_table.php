<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\CRM\Enums\ParticipantType;
use App\Modules\CRM\Enums\OrganizationType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();// make nullable for organizations
            $table->string('last_name')->nullable(); // make nullable for organizations
            $table->string('company_name')->nullable();// make nullable for org
            $table->enum('participant_type',[
                ParticipantType::Person->value, 
                ParticipantType::Organization->value]);//->default(ParticipantType::Person->value);
            $table->enum('organization_type', [
                OrganizationType::Customer->value, 
                OrganizationType::Vendor->value, 
                OrganizationType::Partner->value, 
                OrganizationType::Prospect->value, 
                OrganizationType::Internal->value,
                ])->nullable(); // Only for organizations
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
