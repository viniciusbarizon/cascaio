<label>
    <span>
        {{ _($label) }}
    </span>

    <input dusk="{{ $name }}" name="{{ $name }}" type="{{ $type }}" wire:model="{{ $name }}" {{ $attributes }}
        @required($isRequired)>
</label>
