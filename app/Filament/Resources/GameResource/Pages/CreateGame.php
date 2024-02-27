<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGame extends CreateRecord
{
    protected static string $resource = GameResource::class;

    /**
     * Mutate Form Data Before Create
     * @param array $data
     * @return array|mixed[]
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if(isset($data['show_home']) && $data['show_home'] == 1) {
            $data['status'] = 1;
        }

        return parent::mutateFormDataBeforeCreate($data); // TODO: Change the autogenerated stub
    }
}
