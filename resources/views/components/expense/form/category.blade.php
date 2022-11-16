<label>
    <span>
        {{ _('Categoria') }}
    </span>

    @if (count($categories) > 0)
        <input class="form-select" list="{{ $datalistId }}" name="{{ $name }}">

        <datalist id="{{ $datalistId }}">
            @foreach ($categories as $category)
                <option value="{{ $category }}">
            @endforeach
        </datalist>
    @else
        <input autocomplete="off" name="{{ $name }}" type="text" required>
    @endif
</label>
