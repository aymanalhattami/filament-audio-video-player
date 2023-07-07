<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\Forms\Components\Field;

abstract class BaseAudioVideoPlayer extends Field
{
    use WithAudioVideoPlayer;

    public $mediaLink;

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(static function (self $component, $state): void {
            $component->mediaLink = $state;
        });
    }
}
