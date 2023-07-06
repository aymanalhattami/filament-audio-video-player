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

    <audio style="
        --plyr-color-main: #eab308"
        class="js-player"
        controls>
        <source src="{{ $mediaLink }}"
            type="audio/mp3" />
    </audio>
</x-dynamic-component>
