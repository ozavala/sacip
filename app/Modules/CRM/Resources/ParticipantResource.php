<?php

namespace App\Modules\CRM\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Filament\Resources\Resource;
use App\Modules\CRM\Models\Participant;
use App\Modules\CRM\Pages;
use App\Modules\CRM\Resources;

class ParticipantResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
    protected static ?string $model = Participant::class;

    public static function getPages():array
    {
        return [
            'index' => Pages\ListParticipants::route('/'),
            'create' => Pages\CreateParticipant::route('/create'),
            'edit' => Pages\EditParticipant::route('/{id}/edit'),
        ];
    }
}
