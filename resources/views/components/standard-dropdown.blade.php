@props(['options' => [], 'selected' => null])

<select {{ $attributes->merge(['class' => 'block w-full py-2 pl-3 pr-10 text-base leading-6 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm sm:leading-5']) }}>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
