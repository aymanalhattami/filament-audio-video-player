<x-dynamic-component :component="$getFieldWrapperView()"
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

    <div>
        <video controls id="player"
            crossorigin
            playsinline>
            <source 
                src="{{ $mediaLink }}"
                type="video/mp4"
                size="576">
        </video>
    </div>

</x-dynamic-component>
