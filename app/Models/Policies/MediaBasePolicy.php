<?php

declare(strict_types=1);

namespace Modules\Media\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> b97b11d (.)
use Modules\Xot\Datas\XotData;

abstract class MediaBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(UserContract $user, string $_ability): null|bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
=======
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
>>>>>>> b97b11d (.)
            return true;
        }

        return null;
    }
}
