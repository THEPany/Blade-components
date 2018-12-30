<div class="{{ $container_parent_class ?? 'custom-control custom-checkbox' }}">
    <input type="checkbox"
           class="{{ $checkbox_class ?? 'custom-control-input' }}"
           id="{{ $id ?? snake_case($label) }}"
           name="{{ $name ?? snake_case($label)}}"
           value="{{ $value ?? 1 }}"
           @isset($data)
            @foreach($data as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach
           @endisset
           {{ isset($checked) && $checked == true ? 'checked' : '' }}>
    <label class="{{ $label_class ?? 'custom-control-label' }}"
           for="{{ $id ?? snake_case($label) }}">
        {{ __($label) }}
    </label>
</div>