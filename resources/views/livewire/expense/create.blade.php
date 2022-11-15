<div class="bg-white border-b border-gray-200 p-6 sm:px-20">
    <h2 class="font-semibold mb-4">
        {{ _('Nova despesa')}}
    </h2>

    <form class="flex flex-col gap-4 items-end text-sm xl:flex-row xl:gap-8">
        <x-expense.form.category/>

        <x-expense.form.input.text label="Descrição" name="description" type="text" />
        <x-expense.form.input.text label="Data" name="made-at" type="date" />

        <x-expense.form.country/>

        <x-expense.form.input.text label="Preço" name="price" type="number" min="0.01" step="0.01" />

        <div class="w-full">
            <input type="button" value="Criar">
        </div>
    </form>
</div>
