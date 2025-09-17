<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ConvertMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord
{
    protected static string $resource = MediaResource::class;

<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 9a334cb (.)
    public function getInfolistSchema(): array
    {
        return [
            // Definire qui i componenti dell'infolist
        ];
    }
}
