<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Resources\Pages\PageRegistration;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\CreateTemporaryUpload;
// use Modules\Media\Filament\Resources\TemporaryUploadResource\RelationManagers;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\EditTemporaryUpload;
// use Filament\Forms;
use Modules\Media\Filament\Resources\TemporaryUploadResource\Pages\ListTemporaryUploads;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemporaryUploadResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = TemporaryUpload::class;
=======
    protected static ?string $model = TemporaryUpload::class;
>>>>>>> b97b11d (.)

    /**
     * @return array<string, \Filament\Forms\Components\Component>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> b97b11d (.)
    public static function getFormSchema(): array
    {
        return [
            'file' => \Filament\Forms\Components\FileUpload::make('file')
                ->required()
                ->preserveFilenames()
                ->acceptedFileTypes(['image/*', 'application/pdf', 'application/msword'])
                ->maxSize(10240),
<<<<<<< HEAD
            'folder' => \Filament\Forms\Components\TextInput::make('folder')->required()->maxLength(255),
            'expires_at' => \Filament\Forms\Components\DateTimePicker::make('expires_at')->required(),
=======
            'folder' => \Filament\Forms\Components\TextInput::make('folder')
                ->required()
                ->maxLength(255),
            'expires_at' => \Filament\Forms\Components\DateTimePicker::make('expires_at')
                ->required(),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @psalm-return array<never, never>
     */
<<<<<<< HEAD
    #[\Override]
    public static function getRelations(): array
    {
        return [];
=======
    public static function getRelations(): array
    {
        return [
        ];
>>>>>>> b97b11d (.)
    }

    /**
     * @return PageRegistration[]
     *
     * @psalm-return array{index: PageRegistration, create: PageRegistration, edit: PageRegistration}
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> b97b11d (.)
    public static function getPages(): array
    {
        return [
            'index' => ListTemporaryUploads::route('/'),
            'create' => CreateTemporaryUpload::route('/create'),
            'edit' => EditTemporaryUpload::route('/{record}/edit'),
        ];
    }
}
