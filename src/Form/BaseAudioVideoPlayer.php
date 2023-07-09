<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer\Form;

use Filament\Forms\Components\Field;
use AymanAlhattami\FilamentAudioVideoPlayer\WithAudioVideoPlayer;

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
