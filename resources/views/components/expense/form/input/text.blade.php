<label>
    <span>
        {{ _($label) }}
    </span>

    <input dusk="{{ $name }}" name="{{ $name }}" type="{{ $type }}" {{ $attributes }} @required($isRequired)>
</label>
