<?php

declare(strict_types=1);

namespace Modules\Media\Database\Factories;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Media\Models\TemporaryUpload;

class TemporaryUploadFactory {
    private int $fakeImageWidth = 10;
    private int $fakeImageHeight = 10;

<<<<<<< HEAD
    public static function new(): self
    {
<<<<<<< HEAD
        return new static();
=======
        return new static;
>>>>>>> a573407 (up)
=======
    public static function new(): self {
        return new static();
>>>>>>> 931017b (Fix styling)
    }

    public function useFakeImageDimensions(int $fakeImageWidth, int $fakeImageHeight): self {
        $this->fakeImageWidth = $fakeImageWidth;

        $this->fakeImageHeight = $fakeImageHeight;

        return $this;
    }

    public function create(array $attributes = []): TemporaryUpload {
        $fakeUpload = UploadedFile::fake()->image('test.jpg', $this->fakeImageWidth, $this->fakeImageHeight);

        return TemporaryUpload::createForFile(
            $fakeUpload,
            session()->getId(),
            $attributes['uuid'] ?? Str::uuid(),
            $attributes['name'] ?? 'name',
        );
    }

    public function createMultiple(int $count, array $attributes = []): array {
        return Collection::times($count)
            ->map(fn () => $this->create($attributes))->toArray();
    }
}
