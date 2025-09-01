<?php

declare(strict_types=1);

namespace Modules\Media\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms;
use Filament\Forms\Set;
use function Safe\glob;
use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
>>>>>>> 42f94de (.)
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
=======
use Filament\Forms;
>>>>>>> 73d5e0f9 (.)
use Filament\Forms\Set;
use function Safe\glob;
use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SubNavigationPosition;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\Support\Renderable;
use Modules\UI\Actions\Icon\GetAllIconsAction;
use Modules\Xot\Actions\ModelClass\CountAction;
use Filament\Resources\Resource as FilamentResource;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

/**
 *
*/
class GetAttachmentsSchemaAction
{
    /**
     * 
     */
    public function execute(array $attachments, string $disk='attachments'): array
    {
        $schema = [];
        $sessionId = session()->getId();
<<<<<<< HEAD
<<<<<<< HEAD
        $prefix = Config::string('media-library.prefix');

        $sessionDir = "session-uploads/{$sessionId}";
        if ($prefix != '') {
            $sessionDir = $prefix.'/'.$sessionDir;
=======
        $prefix=Config::string('media-library.prefix');
        
        $sessionDir = "session-uploads/{$sessionId}";
        if($prefix!=''){
            $sessionDir =$prefix.'/'.$sessionDir;
        }
        foreach ($attachments as $attachment) {
            $schema[$attachment]=FileUpload::make($attachment)
            //$schema[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
            ->directory($sessionDir)
            ->disk($disk)
            ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'])
            ->maxSize(5120*2)
            ->preserveFilenames()
            ->required()
            ->previewable(false)
            //->saveUploadedFiles()
            ->afterStateUpdated(function ($state, Set $set) use ($attachment,$sessionDir,$disk) {
                if (!$state) return;
                $state=Arr::wrap($state);
                
                $sessionFiles = [];
                
                foreach ($state as $file) {
                    if ($file instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                        // Salva direttamente nella directory di sessione
                        $fileName = time() . '_' . $file->getClientOriginalName();
                        $sessionPath = $file->storeAs($sessionDir, $fileName, $disk);
                        $sessionFiles[] = $sessionPath;
                    } else {
                        // È già un percorso salvato
                        $sessionFiles[] = $file;
                    }
                }
                
                $set($attachment, $sessionFiles);
            })
            ;
>>>>>>> 42f94de (.)
=======
        $prefix=Config::string('media-library.prefix');
        
        $sessionDir = "session-uploads/{$sessionId}";
        if($prefix!=''){
            $sessionDir =$prefix.'/'.$sessionDir;
>>>>>>> 73d5e0f9 (.)
        }
        foreach ($attachments as $attachment) {
            $schema[$attachment]=FileUpload::make($attachment)
            //$schema[$attachment]=SpatieMediaLibraryFileUpload::make($attachment)
            ->directory($sessionDir)
            ->disk($disk)
            ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/jpg'])
            ->maxSize(5120*2)
            ->preserveFilenames()
            ->required()
            ->previewable(false)
            //->saveUploadedFiles()
            ->afterStateUpdated(function ($state, Set $set) use ($attachment,$sessionDir,$disk) {
                if (!$state) return;
                $state=Arr::wrap($state);
                
                $sessionFiles = [];
                
                foreach ($state as $file) {
                    if ($file instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                        // Salva direttamente nella directory di sessione
                        $fileName = time() . '_' . $file->getClientOriginalName();
                        $sessionPath = $file->storeAs($sessionDir, $fileName, $disk);
                        $sessionFiles[] = $sessionPath;
                    } else {
                        // È già un percorso salvato
                        $sessionFiles[] = $file;
                    }
                }
                
                $set($attachment, $sessionFiles);
            })
            ;
        }
        
        return $schema;
    }
}
