@foreach ($popup as $popimg)
    @if ($popimg->active)
        <div id="subscribe" class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <img src="{{ asset('storage/' . $popimg->image) }}" />
                </div>
            </div>
        </div>
    @endif
@endforeach
