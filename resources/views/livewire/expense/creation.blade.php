<div class="bg-white border-b border-gray-200 p-6 sm:px-20">
    <h2 class="font-semibold mb-4">
        {{ _('Nova despesa')}}
    </h2>

    <form class="gap-4 grid grid-cols-1 items-end lg:grid-cols-3 sm:grid-cols-2 text-sm xl:grid-cols-4 xl:gap-8
        2xl:grid-cols-5" wire:submit.prevent="create"
    >
        <x-expense.form.category/>

        <x-expense.form.input.text label="Descrição (opcional)" :is-required="false" name="description" type="text" />
        <x-expense.form.input.text label="Data" name="made_at" type="date" />

        <x-expense.form.country/>

        <x-expense.form.input.text label="Preço" name="price" type="number" min="0.01" step="0.01" />

        <div class="w-full">
            <input name="create-expense" type="submit" value="Criar">
        </div>
    </form>
</div>
