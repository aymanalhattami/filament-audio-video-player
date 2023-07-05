<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\Forms\Components\Field;

class AudioPlayer extends Field
{
    protected string $view = 'filament-audio-video-player::audio-player';

    public $mediaLink;

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(static function (AudioPlayer $component, $state): void {
            $component->mediaLink = $state;
        });
    }
}
