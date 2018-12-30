<div class="{{ $container_parent_class ?? 'form-group row' }}">
    <label for="{{ snake_case($label) }}"
           class="{{ $label_class ?? 'col-md-4 col-form-label text-right' }}">
        {{ __($label) }}
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    </label>

    <div class="{{ $container_child_class ?? 'col-md-6' }}">
        <select class="form-control" id="{{ $name ?? snake_case($label) }}" name="{{ $name ?? snake_case($label) }}">
            {{ $slot }}
        </select>

        @if ($errors->has($name ?? snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first($name ?? snake_case($label)) }}</strong>
            </span>
        @endif
    </div>

    @push('scripts')
        <script src="/vendor/blade-components/js/select2.min.js" defer></script>
        <script>
            window.onload = function () {
                $('#{{ $name ?? snake_case($label) }}').select2();
            }
        </script>
    @endpush

    @push('links')
        <link href="/vendor/blade-components/css/select2.min.css" rel="stylesheet" />
    @endpush
</div>