<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer\Table;

use Filament\Tables\Columns\Column;
use AymanAlhattami\FilamentAudioVideoPlayer\WithAudioVideoPlayer;

abstract class BaseAudioVideoPlayerColumn  extends Column
{
    use WithAudioVideoPlayer;

    public static function make(string $name): static
    {
        return parent::make($name)->disableClick();
    }
}
