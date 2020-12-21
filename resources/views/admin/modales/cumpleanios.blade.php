{{-- Modal feliz cumpleaños --}}
@if (App\Helpers\Helpers::modal(Auth::User()->cumpleanios) == $date)
<div class="col-lg-10">
    <div class="modal fade" id="modal-notification" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-" role="document">
            <div class="modal-content gif">
                <div class="modal-header">
                    <span aria-hidden="true"></span>
                </div>
                <br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">¡Gracias!</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif