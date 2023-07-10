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
        if (!array_key_exists('--plyr-color-main', $this->css)) {
            $this->css['--plyr-color-main'] = config('filament-audio-video-player.color');
        }

        return $this->css;
    }

    public function getCssAsString(): string
    {
        $css = '';

        foreach ($this->getCss() as $key => $value) {
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

    public function getConfigAsString(): string
    {
        $config = '';

        foreach ($this->getConfig() as $key => $value) {
            if (is_string($value)) {
                $config .= Str::of($config)->append('"' . $key . '"' . ': "' . $value . '",');
            } elseif (is_array($value)) {
                $string = '';
                if(count($value)){
                    foreach($value as $innerKey => $innerValue){
                        if(is_string($innerValue)){
                            $string .= '"' . $innerValue . '"';
                        }else{
                            $string .= $innerValue;
                        }

                        $string .= ",";
                    }
                }

                $string = trim($string, ',');

                $config .= Str::of($config)->append('"' . $key . '"' . ': [' . $string . '],');
            } elseif (is_bool($value)) {
                if ($value) {
                    $config .= Str::of($config)->append('"' . $key . '"' . ': ' . true . ',');
                } else {
                    $config .= Str::of($config)->append('"' . $key . '"' . ': ' . 0 . ',');
                }
            } else {
                $config .= Str::of($config)->append('"' . $key . '"' . ': ' . $value . ',');
            }
        }

        return trim($config, ',');
    }
}
