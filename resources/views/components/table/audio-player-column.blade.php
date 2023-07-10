<audio style="{{ $getCssAsString() }}"
    data-plyr-config='{
        {{ $getConfigAsString() }}
    }'
    class="js-player"
    controls>
    <source src="{{ $getState() }}"
        type="audio/mp3" />
</audio>
