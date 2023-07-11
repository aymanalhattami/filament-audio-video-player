<video style="{{ $getCssAsString() }}"
    data-plyr-config='{
        {{ $getConfigAsString() }}
    }'
    class="js-plyr"
    playsinline
    controls>
    <source src="{{ $getState() }}"
        type="video/mp4">
</video>
