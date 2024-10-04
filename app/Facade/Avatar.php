<?php
namespace App\Facade;

use App\Services\AvatarManager;
use Illuminate\Support\Facades\Facade;

class Avatar extends Facade {
    protected static function getFacadeAccessor()
    {
        return AvatarManager::class;
    }
}
