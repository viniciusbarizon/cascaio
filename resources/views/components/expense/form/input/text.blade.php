<label>
    <span>
        {{ _($label) }}
    </span>

    <input name="{{ $name }}" type="{{ $type }}" {{ $attributes }} @required($isRequired)>
</label>
