<div class="table-responsive">
    <table class="table {{ $table_class ?? 'table-sm table-transparent table-hover p-0 m-0' }}"
           id="{{ $table_id ?? 'table-id' }}">
        @isset($thead)
            <thead>
                <tr class="text-uppercase">
                    {{ $thead }}
                </tr>
            </thead>
        @endisset
        <tbody>
        {{ $slot }}
        </tbody>
        @isset($tfoot)
            <tfoot>
                {{ $tfoot ?? '' }}
            </tfoot>
        @endisset
    </table>
</div>