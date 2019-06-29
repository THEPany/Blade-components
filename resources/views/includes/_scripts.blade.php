@push('scripts')
<script src="{{ asset('vendor/blade-components/choices.min.js') }}" defer></script>
<script src="{{ asset('vendor/blade-components/flatpickr.js') }}" defer></script>
@endpush

@push('links')
<link href="{{ asset('vendor/blade-components/choices.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('vendor/blade-components/flatpickr.min.css') }}" rel="stylesheet"/>
@endpush

@stack('scripts')
    <script>
        window.onload = function () {
            @stack('onload')
        };
    </script>