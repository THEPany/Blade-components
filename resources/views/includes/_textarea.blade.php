<div class="{{ $container_parent_class ?? 'form-group row' }}">
    <label for="{{ snake_case($label) }}"
           class="{{ $label_class ?? 'col-4 col-form-label text-right' }}">
        {{ __($label) }}

        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    </label>

    <div class="{{ $textarea_container_class ?? 'col-6' }}">
        <textarea
                @isset($style) style="{{ $style }}" @endisset
                class="form-control{{ $errors->has($name  ?? snake_case($label)) ? ' is-invalid' : '' }} {{ $textarea_class ?? '' }}"
                id="{{ $id ?? snake_case($label) }}"
                name="{{ $name ?? snake_case($label)}}"
                placeholder="@isset($placeholder) {{ __($placeholder) }} @else {{ __($label) }} @endisset"
                @isset($required)
                required
                @endisset
                autofocus>{{ old($name ?? snake_case($label), $value ?? '') }}</textarea>
        @if ($errors->has($name ?? snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first($name ?? snake_case($label)) }}</strong>
            </span>
        @endif
    </div>
</div>