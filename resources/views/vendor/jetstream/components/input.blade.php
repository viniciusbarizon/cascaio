@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-lime-400 focus:ring focus:ring-lime-400 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
