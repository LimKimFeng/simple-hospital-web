@php
    $backgroundColorMap = [
        'simple' => 'bg-light',
        'success' => 'bg-success text-white',
        'danger' => 'bg-danger text-white',
        'warning' => 'bg-warning',
        // Tambahkan lebih banyak mapping jika diperlukan
    ];

    $backgroundColor = $backgroundColorMap[$type] ?? 'bg-secondary text-white';
@endphp

<div class="p-3 w-100 {{ $backgroundColor }} rounded border border-dark d-flex align-items-center justify-content-center">
    <p class="text-center m-0">{{ $message }}</p>
</div>
