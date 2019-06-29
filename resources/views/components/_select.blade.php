<div class="{{ $container_parent_class ?? 'form-group row' }}">
    <label for="{{ snake_case($label) }}"
           class="{{ $label_class ?? 'col-md-4 col-form-label text-right' }}">
        {{ __($label) }}
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    </label>

    <div class="{{ $container_child_class ?? 'col-md-6' }}">
        <select class="form-control{{ $errors->has($name ?? snake_case($label)) ? ' is-invalid ' : '' }}" id="{{ $name ?? snake_case($label) }}" name="{{ $name ?? snake_case($label) }}">
            {{ $slot }}
        </select>

        @if ($errors->has($name ?? snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first($name ?? snake_case($label)) }}</strong>
            </span>
        @endif
    </div>


</div>

@push('onload')
    new Choices(php);
@endpush