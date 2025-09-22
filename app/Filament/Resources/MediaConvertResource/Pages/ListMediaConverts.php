<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaConvertResource\Pages;

use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Job\Filament\Widgets\ClockWidget;
use Modules\Media\Actions\Video\ConvertVideoByMediaConvertAction;
use Modules\Media\Datas\ConvertData;
use Modules\Media\Filament\Resources\MediaConvertResource;
use Modules\Media\Models\MediaConvert;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListMediaConverts extends XotBaseListRecords
{
    protected static string $resource = MediaConvertResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->sortable(),
            'media.file_name' => TextColumn::make('media.file_name')->sortable(),
            'format' => TextColumn::make('format')->searchable(),
            'codec_video' => TextColumn::make('codec_video')->searchable(),
            'codec_audio' => TextColumn::make('codec_audio')->searchable(),
            'preset' => TextColumn::make('preset')->searchable(),
            'bitrate' => TextColumn::make('bitrate'),
            'width' => TextColumn::make('width')->numeric(),
            'height' => TextColumn::make('height')->numeric(),
            'threads' => TextColumn::make('threads')->numeric(),
            'speed' => TextColumn::make('speed')->numeric(),
            'percentage' => TextColumn::make('percentage')->numeric(),
            'remaining' => TextColumn::make('remaining')->numeric(),
            'rate' => TextColumn::make('rate')->numeric(),
            'execution_time' => TextColumn::make('execution_time')->numeric(),
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable(),
            'media.file_name' => TextColumn::make('media.file_name')
                ->sortable(),
            'format' => TextColumn::make('format')
                ->searchable(),
            'codec_video' => TextColumn::make('codec_video')
                ->searchable(),
            'codec_audio' => TextColumn::make('codec_audio')
                ->searchable(),
            'preset' => TextColumn::make('preset')
                ->searchable(),
            'bitrate' => TextColumn::make('bitrate'),
            'width' => TextColumn::make('width')
                ->numeric(),
            'height' => TextColumn::make('height')
                ->numeric(),
            'threads' => TextColumn::make('threads')
                ->numeric(),
            'speed' => TextColumn::make('speed')
                ->numeric(),
            'percentage' => TextColumn::make('percentage')
                ->numeric(),
            'remaining' => TextColumn::make('remaining')
                ->numeric(),
            'rate' => TextColumn::make('rate')
                ->numeric(),
            'execution_time' => TextColumn::make('execution_time')
                ->numeric(),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @return array<string, Tables\Filters\BaseFilter>
     */
<<<<<<< HEAD
    #[\Override]
    public function getTableFilters(): array
    {
        return [
            'format' => SelectFilter::make('format')->options(MediaConvert::distinct()->pluck(
                'format',
                'format',
            )->toArray(...)),
            'codec_video' => SelectFilter::make('codec_video')->options(MediaConvert::distinct()->pluck(
                'codec_video',
                'codec_video',
            )->toArray(...)),
            'codec_audio' => SelectFilter::make('codec_audio')->options(MediaConvert::distinct()->pluck(
                'codec_audio',
                'codec_audio',
            )->toArray(...)),
=======
    public function getTableFilters(): array
    {
        return [
            'format' => SelectFilter::make('format')
                ->options(fn () => MediaConvert::distinct()->pluck('format', 'format')->toArray()),
            'codec_video' => SelectFilter::make('codec_video')
                ->options(fn () => MediaConvert::distinct()->pluck('codec_video', 'codec_video')->toArray()),
            'codec_audio' => SelectFilter::make('codec_audio')
                ->options(fn () => MediaConvert::distinct()->pluck('codec_audio', 'codec_audio')->toArray()),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
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
<<<<<<< HEAD
            'convert' => Action::make('convert')->action(function (MediaConvert $record): void {
                $record->update(['percentage' => 0]);
                $data = ConvertData::from([
                    'file' => $record->file,
                    'disk' => $record->disk,
                ]);
                app(ConvertVideoByMediaConvertAction::class)->onQueue()->execute($data, $record);
            }),
=======
            'convert' => Action::make('convert')
                ->action(function (MediaConvert $record): void {
                    $record->update(['percentage' => 0]);
                    $data = ConvertData::from([
                        'file' => $record->file,
                        'disk' => $record->disk,
                    ]);
                    app(ConvertVideoByMediaConvertAction::class)
                        ->onQueue()
                        ->execute($data, $record);
                }),
>>>>>>> b97b11d (.)
        ];
    }

    /**
     * @return array<string, Tables\Actions\BulkAction>
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

    /**
     * @return array<class-string>
     */
    protected function getHeaderWidgets(): array
    {
        return [
            ClockWidget::class,
        ];
    }
}
