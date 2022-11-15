<div class="bg-white border-b border-gray-200 p-6 sm:px-20">
    <h2 class="font-semibold mb-4">
        {{ _('Nova despesa')}}
    </h2>

    <form class="flex flex-col gap-4 text-sm xl:flex-row xl:gap-8">
        <x-expense.category/>

        <label class="block w-full">
            <span>
                {{ _('Descrição') }}
            </span>

            <input name="description" type="text">
        </label>

        <label class="block w-full">
            <span>
                {{ _('Data') }}
            </span>

            <input name="made-at" type="date">
        </label>

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

        <label class="block w-full">
            <span>
                {{ _('Preço') }}
            </span>

            <input min="0.01" name="price" step="0.01" type="number">
        </label>
    </form>
</div>
