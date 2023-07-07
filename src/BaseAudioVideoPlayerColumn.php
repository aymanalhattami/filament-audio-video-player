<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Filament\Tables\Columns\Column;

abstract class BaseAudioVideoPlayerColumn  extends Column
{
    use WithAudioVideoPlayer;
}
