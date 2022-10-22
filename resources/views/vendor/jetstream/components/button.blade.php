<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'active:bg-lime-400 bg-lime-400 border border-transparent disabled:opacity-25 focus:border-lime-400
        focus:outline-none focus:ring focus:ring-lime-400 font-semibold hover:bg-lime-500 inline-flex items-center px-4
        py-2 rounded-md text-xs text-black tracking-widest transition uppercase'
    ])
}}>
    {{ $slot }}
</button>
