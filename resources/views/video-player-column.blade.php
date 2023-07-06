<video style="
        --plyr-color-main: {{ config('filament-audio-video-player.primary_color') }}"
    data-plyr-config='{ 
        "ratio": "5:3",
        "controls": ["play", "mute", "volume"]
    }'
    class="js-player"
    playsinline
    controls>
    <source src="{{ $getState() }}"
        type="video/mp4">
</video>
