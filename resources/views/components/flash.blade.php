@props([
    'type' => 'success',
    'colours' => [
        'success' => 'bg-green-400 border-green-500',
        'warning' => 'bg-yellow-300 border-yellow-400',
        'error' => 'bg-red-400 border-red-500'
    ]

    ])

<section {{ $attributes->merge(['class' => "$colours[$type] border p-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>

        <button>&times;</button>
    </div>
</section>