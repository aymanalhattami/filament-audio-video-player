<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentAudioVideoPlayerServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-audio-video-player')
            ->hasViews()
            ->hasConfigFile();
    }

    // protected function getScripts(): array
    // {
    //     return [
    //         'filament-audio-video-player' => config('filament-audio-video-player.javascript'),
    //     ];
    // }

    // protected function getStyles(): array
    // {
    //     return [
    //         'filament-audio-video-player' => config('filament-audio-video-player.css'),
    //     ];
    // }
}
