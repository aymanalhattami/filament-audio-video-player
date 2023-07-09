<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer\Table;

use Filament\Tables\Columns\Column;
use AymanAlhattami\FilamentAudioVideoPlayer\WithAudioVideoPlayer;

abstract class BaseAudioVideoPlayerColumn  extends Column
{
    use WithAudioVideoPlayer;
}
