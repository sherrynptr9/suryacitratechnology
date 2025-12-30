<?php

namespace App\Filament\Resources\Products\Pages; 

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}