<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaConvertResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Media\Filament\Resources\MediaConvertResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateMediaConvert extends XotBaseCreateRecord
=======

class CreateMediaConvert extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> b5b5b268 (up)
{
    protected static string $resource = MediaConvertResource::class;
}
