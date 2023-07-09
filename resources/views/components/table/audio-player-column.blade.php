<audio style="{{ $getCssForBlade() }}"
    data-plyr-config='{
        {{ $getConfigForBlade() }}
    }'
    class="js-player"
    controls>
    <source src="{{ $getState() }}"
        type="audio/mp3" />
</audio>
