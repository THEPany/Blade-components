<div class="card {{ $card_style ?? 'shadow-sm' }} ">
   @isset($header)
        <div class="card-header border-0 {{ $header_style ?? 'bg-white' }}">{{ $header }}</div>
   @endisset
    <div class="card-body {{ $body_style ?? '' }}">
        {{ $slot }}
    </div>
    @isset($footer)
       <div class="card-footer text-muted border-0">
           {{ $footer }}
       </div>
    @endisset
</div>