<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\Facades\Filament;
use Illuminate\Support\HtmlString;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentAudioVideoPlayerServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-audio-video-player';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasConfigFile();
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        Filament::registerRenderHook(
            name: 'styles.end',
            callback: fn () => new HtmlString(html: "
                <link rel='stylesheet' href='https://cdn.plyr.io/3.7.8/plyr.css' />
            ")
        );

        Filament::registerRenderHook(
            name: 'scripts.end',
            callback: fn () => new HtmlString(html: "
                <script src='https://cdn.plyr.io/3.7.8/plyr.polyfilled.js'></script>
                <script>
                    Array.from(document.querySelectorAll('.js-player')).map((p) => new Plyr(p));
                </script>
            ")
        );
    }
}
