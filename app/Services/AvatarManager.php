<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class AvatarManager
{
    const DISK = 'public';
    const DIRECTORY = "avatars";

    public function save(UploadedFile $file, String $avatarName) {
        return $this->storage()->putFileAs(self::DIRECTORY, $file, $avatarName);
    }

    public function remove(String $avatarName) {
        $this->storage()->delete($this->resolve_path($avatarName));
    }

    public function exists(String $avatarName): bool {
        return $this->storage()->exists($this->resolve_path($avatarName));
    }

    public function url($avatar_name) {
        return Storage::url($this->resolve_path($avatar_name));
    }

    private function storage() {
        return Storage::disk(self::DISK);
    }

    private function resolve_path($avatarName) {
        return self::DIRECTORY."/".$avatarName;
    }
}
