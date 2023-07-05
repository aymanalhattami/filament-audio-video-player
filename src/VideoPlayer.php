<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\Forms\Components\Field;

class VideoPlayer extends Field
{
    protected string $view = 'filament-audio-video-player::video-player';

    public $mediaLink;

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(static function (VideoPlayer $component, $state): void {
            $component->mediaLink = $state;
        });
    }

}
