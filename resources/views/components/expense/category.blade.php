<label class="block w-full">
    <span>
        {{ _('Categoria') }}
    </span>

    @if (count($list) > 0)
        <input class="form-select" list="{{ $datalistId }}" name="{{ $name }}">

        <datalist id="{{ $datalistId }}">
            @foreach ($list as $category)
                <option value="{{ $category }}">
            @endforeach
        </datalist>
    @else
        <input name="{{ $name }}" type="text">
    @endif
</label>
