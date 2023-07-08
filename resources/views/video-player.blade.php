<x-dynamic-component wire:ignore
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()">

    <video style="{{ $getCssForBlade() }}"
        data-plyr-config='{}'
        controls
        class="js-player"
        crossorigin
        playsinline>
        <source src="{{ $mediaLink }}"
            type="video/mp4">
    </video>
</x-dynamic-component>
