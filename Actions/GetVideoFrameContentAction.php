<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Media\Actions;

use Exception;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use Spatie\QueueableAction\QueueableAction;

class GetVideoFrameContentAction {
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct() {
        // Prepare the action for execution, leveraging constructor injection.
    }

    /**
     * Execute the action.
     */
    public function execute(string $disk_mp4, string $file_mp4, int $time) {
        if (! Storage::disk($disk_mp4)->exists($file_mp4)) {
            $msg = [
                'message' => 'video not exists',
                'status' => 500,
                'disk_mp4' => $disk_mp4,
                'file_mp4' => $file_mp4,
            ];
            throw new Exception(implode(PHP_EOL, $msg));
        }

        $res = FFMpeg::fromDisk($disk_mp4)
                ->open($file_mp4)
                ->getFrameFromSeconds($time)
                ->export()
                ->getFrameContents();

        return $res;
    }
}
