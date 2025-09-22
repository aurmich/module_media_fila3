<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
<<<<<<< HEAD
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
=======
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteBulkAction;
>>>>>>> b97b11d (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Media\Models\TemporaryUpload;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTemporaryUploads extends XotBaseListRecords
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return array<string, TextColumn>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> b97b11d (.)
    public function getTableColumns(): array
    {
        return [
            'folder' => TextColumn::make('folder')
                ->searchable()
                ->sortable()
                ->wrap(),
            'filename' => TextColumn::make('filename')
                ->searchable()
                ->sortable()
                ->wrap(),
<<<<<<< HEAD
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
=======
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @return array<string, SelectFilter>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableFilters(): array
    {
        return [
            'folder' => SelectFilter::make('folder')->options(TemporaryUpload::distinct()->pluck(
                'folder',
                'folder',
            )->toArray(...)),
=======
    public function getTableFilters(): array
    {
        return [
            'folder' => SelectFilter::make('folder')
                ->options(fn () => TemporaryUpload::distinct()->pluck('folder', 'folder')->toArray()),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @return array<string, ViewAction|EditAction|DeleteAction>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> b97b11d (.)
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'edit' => EditAction::make(),
            'delete' => DeleteAction::make(),
        ];
    }

    /**
     * @return array<string, DeleteBulkAction>
     */
<<<<<<< HEAD
    #[\Override]
=======
>>>>>>> b97b11d (.)
    public function getTableBulkActions(): array
    {
        return [
            'delete' => DeleteBulkAction::make(),
        ];
    }
}
