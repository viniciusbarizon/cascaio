<label class="block w-full">
    <span>
        {{ _('Categoria') }}
    </span>

    @if (count($list) > 0)
        <input class="mt-1 block border-lime-400 focus:border-lime-400 focus:ring focus:ring-lime-400
            focus:ring-opacity-50 form-select rounded-md shadow-sm w-full" list="categories" name="category">

        <datalist id="categories">
            @foreach ($list as $category)
                <option value="{{ $category }}">
            @endforeach
        </datalist>
    @else
        <input class="mt-1 block border-lime-400 focus:border-lime-400 focus:ring focus:ring-lime-400
            focus:ring-opacity-50 rounded-md shadow-sm w-full" name="category" type="text">
    @endif
</label>
