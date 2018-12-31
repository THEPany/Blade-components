<div class="{{ $container_parent_class ?? 'custom-control custom-radio' }}">
    <input type="radio" class="{{ $radio_class ?? 'custom-control-input' }}"
           name="{{ $name ?? snake_case($label) }}"
           value="{{ $value ?? 1 }}"
           @isset($id) id="{{ $id }}" @endisset
           @if ( isset ($checked) && $checked == true) checked @endif
           @isset($onclick) onclick="{{ $onclick }}"@endisset>
    <label @isset($id) for="{{ $id }}" @endisset class="{{ $label_class ?? 'custom-control-label' }}">{{ __($label) }}</label>
</div>