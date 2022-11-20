<label>
    <span>
        {{ _('Categoria') }}
    </span>

    @if (count($categories) > 0)
        <input dusk="{{ $name }}" class="form-select" list="{{ $datalistId }}" name="{{ $name }}"
            wire:model="{{ $name }}">

        <datalist id="{{ $datalistId }}">
            @foreach ($categories as $category)
                <option value="{{ $category }}">
            @endforeach
        </datalist>
    @else
        <input dusk="{{ $name }}" autocomplete="off" name="{{ $name }}" type="text" wire:model="{{ $name }}" required>
    @endif
</label>
