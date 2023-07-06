<audio style="
        --plyr-color-main: {{ config('filament-audio-video-player.primary_color') }}"
    data-plyr-config='{ 
    "settings": []
    }'
    class="js-player"
    controls>
    <source src="{{ $getState() }}"
        type="audio/mp3" />
</audio>
