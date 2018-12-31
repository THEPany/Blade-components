<div class=flatpickr>
    <input type="text"
           class="{{ $flatpickr_class ?? 'form-control' }}"
           placeholder="@isset($placeholder) {{ __($placeholder) }} @endisset"
           id="{{ $name ?? snake_case($label) }}"
           name="{{ $name ?? snake_case($label) }}"
           value="{{ old($name ?? snake_case($label), $value ?? '') }}"
           @isset ($required) required @endisset>
</div>

@push('onload')
    flatpickr('#{{ $name ?? snake_case($label) }}',{
        dateFormat: '{{ $dateFormat ?? "Y-m-d" }}',
        minDate: '{{ $minDate ?? '' }}',
        maxDate: '{{ $maxDate ?? '' }}',
    });
@endpush