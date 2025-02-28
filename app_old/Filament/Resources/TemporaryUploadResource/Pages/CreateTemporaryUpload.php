<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateTemporaryUpload extends XotBaseCreateRecord
=======

class CreateTemporaryUpload extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> b5b5b268 (up)
{
    protected static string $resource = TemporaryUploadResource::class;
}
