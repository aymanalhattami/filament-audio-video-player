<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

trait WithAudioVideoPlayer
{
    protected ?string $color = null;

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getColor(): string
    {
        if (is_null($this->color)) {
            $this->color = config('filament-audio-video-player.primary_color');
        }

        return $this->color;
    }
}
