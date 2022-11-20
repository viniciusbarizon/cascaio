<label>
    <span>
        {{ _($label) }}
    </span>

    <input dusk="{{ $name }}" name="{{ $name }}" type="{{ $type }}" wire:model.lazy="{{ $name }}" {{ $attributes }}
        @required($isRequired)>
</label>
