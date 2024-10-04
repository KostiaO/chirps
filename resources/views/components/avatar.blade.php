@props(['size' => 24])

@php
use App\Facade\Avatar;

$avatar_name = 'avatar'.Auth::user()->id;

@endphp


@if (Avatar::exists($avatar_name))
    <img
        src="{{ Avatar::url($avatar_name) }}"
        alt="avatar"
        :style="{ width: '@js($size)px', height: '@js($size)px' }"
        class="rounded-full"
    />
@else
    <img
        src="{{ url('static/225-default-avatar.png') }}"
        alt="avatar"
        :style="{ width: '@js($size)px', height: '@js($size)px' }"
    />
@endif
