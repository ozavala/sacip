<?php

namespace App\Modules\CRM\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Filament\Resources\Resource;
use App\Modules\CRM\Models\Role; 
use App\Modules\CRM\Pages;
use App\Modules\CRM\Resources;

class RoleResource extends Resource
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
    protected static ?string $model = Client::class;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{id}/edit'),
        ];
    }
}
