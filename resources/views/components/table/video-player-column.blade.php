<video style="{{ $getCssForBlade() }}"
    data-plyr-config='{
        {{ $getConfigForBlade() }}
    }'
    class="js-player"
    playsinline
    controls>
    <source src="{{ $getState() }}"
        type="video/mp4">
</video>
