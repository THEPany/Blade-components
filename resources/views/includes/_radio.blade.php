<label class="{{ $container_parent_class ?? 'custom-control custom-radio' }}">
    <input type="radio" class="{{ $radio_class ?? 'custom-control-input' }}"
           name="{{ $name ?? snake_case($label) }}" value="{{ $value ?? 1 }}"
           {{ isset($checked) && $checked == true ? 'checked' : '' }}
           @isset($onclick)
           onclick="{{ $onclick }}"
           @endisset>
    <span class="{{ $label_class ?? 'custom-control-label' }}">{{ __($label) }}</span>
</label>