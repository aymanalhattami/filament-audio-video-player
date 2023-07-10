<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer\Form;

use Filament\Forms\Components\Field;
use AymanAlhattami\FilamentAudioVideoPlayer\WithAudioVideoPlayer;

abstract class BaseAudioVideoPlayer extends Field
{
    use WithAudioVideoPlayer;
}
