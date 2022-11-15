<label class="block w-full">
    <span>
        {{ _('País') }}
    </span>

    <select name="country-id">
        <option></option>

        @foreach($countries as $id => $name)
            <option value="{{ $id }}">
                {{ $name }}
            </option>
        @endforeach
    </select>
</label>
