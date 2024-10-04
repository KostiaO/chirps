<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Facade\Avatar;
use Illuminate\Http\Request;

class AvatarUploadController extends Controller
{
    const DEFAULT_AVATAR_FILENAME = "avatar";
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $avatar_name = self::DEFAULT_AVATAR_FILENAME.$request->user()->id;

        $request->validate([
            "avatar" => "required|file|mimes:png,jpg"
        ]);

        if (Avatar::exists($avatar_name)) {
            Avatar::remove($avatar_name);
        }

        Avatar::save($request->file('avatar'), $avatar_name);

        return back()->with('status', 'avatar-updated-successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
