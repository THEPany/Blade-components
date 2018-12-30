<button type="button" class="{{ $modal_btn_class ?? 'btn btn-primary' }}" data-toggle="modal" data-target="#{{ $modal_id ?? 'exampleModal' }}">
    {{ $modal_btn ?? 'Default modal btn' }}
</button>

<div class="modal fade" id="{{ $modal_id ?? 'exampleModal' }}" tabindex="-1" role="dialog" aria-labelledby="e{{ $modal_id ?? 'exampleModal' }}Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modal_id ?? 'exampleModal' }}Label">{{ $modal_title ?? 'Modal title' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @isset($modal_footer)
                <div class="modal-footer">
                    <button type="button" class="{{ $modal_footer_btn ?? 'btn btn-secondary' }}" data-dismiss="modal">{{ __('Close') }}</button>
                    {{ $modal_footer }}
                </div>
            @endisset
        </div>
    </div>
</div>