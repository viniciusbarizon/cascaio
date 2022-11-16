<label>
    <span>
        {{ _('País') }}
    </span>

    <select name="country-id" required>
        <option></option>

        @foreach($countries as $id => $name)
            <option value="{{ $id }}">
                {{ $name }}
            </option>
        @endforeach
    </select>
</label>
