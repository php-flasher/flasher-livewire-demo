<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHPFlasher livewire demo</title>
        @livewireStyles
    </head>
    <body class="antialiased">
        <livewire:toastr />
        <livewire:noty />
        <livewire:notyf />
        <livewire:pnotify />
        <livewire:sweet-alert />

        @flasher_render <!-- this render all flasher notifications. -->
        @flasher_livewire_render <!-- this render livewire notifications only. -->
        @livewireScripts
    </body>
</html>
