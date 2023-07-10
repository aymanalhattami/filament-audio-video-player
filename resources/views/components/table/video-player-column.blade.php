<video style="{{ $getCssAsString() }}"
    data-plyr-config='{
        {{ $getConfigAsString() }}
    }'
    class="js-player"
    playsinline
    controls>
    <source src="{{ $getState() }}"
        type="video/mp4">
</video>
