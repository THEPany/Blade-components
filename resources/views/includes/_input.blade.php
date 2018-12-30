<div class="{{ $container_parent_class ?? 'form-group row' }}">
    <label for="{{ snake_case($label) }}"
           class="{{ $label_class ?? 'col-md-4 col-form-label text-right' }}">
        {{ __($label) }}
        @isset($required)
            <span class="text-danger">*</span>
        @endisset
    </label>

    <div class="{{ $container_child_class ?? 'col-md-6' }}">
        <input
                @isset ($readonly)
                readonly="true"
                @endisset
                type="{{ $type ?? 'text' }}"
                placeholder="@isset($placeholder) {{ __($placeholder) }} @else {{ __($label) }} @endisset"
                class="form-control{{ $errors->has(snake_case($label)) ? ' is-invalid' : '' }} {{ $input_class ?? '' }}"
                id="{{ $name ?? snake_case($label) }}"
                name="{{ $name ?? snake_case($label) }}"
                value="{{ old($name ?? snake_case($label), $value ?? '') }}"
                @isset ($onkeyup)
                onkeyup="{{$onkeyup}}"
                @endisset
                @isset ($step)
                step="{{$step}}"
                @endisset
                @isset ($readonly)
                readonly="{{$readonly}}"
                @endisset
                @isset ($required)
                required
                @endisset
                autofocus>

        @if ($errors->has($name ?? snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first($name ?? snake_case($label)) }}</strong>
            </span>
        @endif
    </div>
</div>