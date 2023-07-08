<?php

namespace AymanAlhattami\FilamentAudioVideoPlayer;

use Illuminate\Support\Str;

trait WithAudioVideoPlayer
{
    protected array $css = [];
    protected array $config = [];

    public function setCss(array $css): static
    {
        $this->css = $css;

        return $this;
    }

    public function getCss(): array
    {
        if(!array_key_exists('--plyr-color-main', $this->css)){
            $this->css['--plyr-color-main'] = config('filament-audio-video-player.color');
        }

        return $this->css;
    }

    public function getCssForBlade(): string
    {
        $css = '';

        foreach($this->getCss() as $key => $value){
            $css .= Str::of($css)->append($key . ": " . $value . ';');
        }

        return $css;
    }

    public function setConfig(array $config): static
    {
        $this->config = $config;

        return $this;
    }

    public function getConfig(): array
    {
        return $this->config;
    }
    
    public function getConfigForBlade(): string
    {
        $config = '';

        foreach($this->getConfig() as $key => $value){
            $config .= Str::of($config)->append('"' . $key . '"' . ': "' . $value . '",');
        }

        info($config);

        return $config;
    }
}
