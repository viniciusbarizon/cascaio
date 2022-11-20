<label>
    <span>
        {{ _('País') }}
    </span>

    <select dusk="{{ $name }}" name="{{ $name }}" wire:model="{{ $name }}" required>
        <option></option>

        @foreach($countries as $id => $countryName)
            <option value="{{ $id }}">
                {{ $countryName }}
            </option>
        @endforeach
    </select>
</label>
