<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

<<<<<<< HEAD
class CreateMedia extends XotBaseCreateRecord
=======
class CreateMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> 306ac98b (up)
{
    protected static string $resource = MediaResource::class;
}
