<div style="{{ $getCssAsString() }}"
    data-plyr-config='{
        {{ $getConfigAsString() }}
    }'
    class="plyr__video-embed js-player">
    <iframe 
        style="position: unset;"
        src="{{ $getState() }}"
        allowfullscreen
        allowtransparency
        allow="autoplay"></iframe>
</div>
