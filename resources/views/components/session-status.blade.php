@props(["status"])

@if ($status === session('status'))
    <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600"
    >{{ $slot }}</p>
@endif
