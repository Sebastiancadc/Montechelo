
{{-- -------------------- The default card (white) -------------------- --}}
@if($viewType == 'default')
    @if($from_id != $to_id)
    <div class="message-card" data-id="{{ $id }}">
        <p>{!! ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message) !!}
            <sub title="{{ $fullTime }}">{{ $time }}</sub>
            {{-- If attachment is a file --}}
            @if(@$attachment[2] == 'file')
            <a href="{{ route(config('chatify.attachments.route'),['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download">
                <span class="fas fa-file"></span> {{$attachment[1]}}</a>
            @endif
        </p>
    </div>
    {{-- If attachment is an image --}}
    @if(@$attachment[2] == 'image')
    <div>
        <div class="message-card">
            <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$attachment[0]) }}')">
            </div>
            <div class="file-download" style="
            margin-left: -248px;
            margin-top: 156px;height: 21px;
            width: 37px;
            border: 1px solid rgb(0 0 0 / 71%);
            background: rgb(0 0 0 / 62%);"><a href="{{ route(config('chatify.attachments.route'),['fileName'=>$attachment[0]]) }}" download target="_blank" style="color: aliceblue;" ><i class="fas fa-download" style="margin-left: 2px;" ></i></a>
            </div>
        </div>
    </div>
    @endif
    @endif
@endif


{{-- -------------------- Sender card (owner) -------------------- --}}
@if($viewType == 'sender')
    <div class="message-card mc-sender" data-id="{{ $id }}">
{{--         
       <a href="#" class="table-action table-action-delete" data-toggle="modal" data-target="#deleteUsuario{{$id}}" style="margin-top: 10px;color: aliceblue;">
        <i class="fas fa-trash"></i></a> 
         --}}
        <p>{!! ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message) !!}
            <sub title="{{ $fullTime }}" class="message-time">
                <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}</sub>
                {{-- If attachment is a file --}}
            @if(@$attachment[2] == 'file')
            <a href="{{ route(config('chatify.attachments.route'),['fileName'=>$attachment[0]]) }}" class="file-download">
                <span class="fas fa-file"></span> {{$attachment[1]}}</a>
            @endif
        </p>
    </div>
    {{-- If attachment is an image --}}
    
    @if(@$attachment[2] == 'image')
    </div>
    <div >
        <div class="message-card mc-sender">
            <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$attachment[0]) }}')">
          
        </div>
        <div class="file-download" style="
        margin-right: -248px;
        margin-top: 156px;height: 21px;
        width: 37px;
        border: 1px solid rgb(0 0 0 / 71%);
        background: rgb(0 0 0 / 62%);"><a href="{{ route(config('chatify.attachments.route'),['fileName'=>$attachment[0]]) }}" download target="_blank" style="color: aliceblue;" ><i class="fas fa-download" style="margin-left: 2px;" ></i></a>
        </div>  
        </div>
    </div>
    
    @endif

@endif
   
<div class="col-md-4">

    <div class="modal fade" id="deleteUsuario{{$id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">

              <div style="background: rgba(50, 50, 50, 0.94);
              position: absolute;
              margin-top: -147px;
              width: 100%;
              padding: 10px;transform: scale(1);
              animation: 0.15s ease 0s 1 normal none running show_modal;
              width: auto;
            max-width: 400px;
            padding: 20px 15px;
            border-radius: 5px;
            text-align: center;" data-name="delete" data-modal='0'>
                <div class="app-modal-header">¿Está seguro de que desea eliminar esto?</div>
                <div class="app-modal-body">No se puede deshacer esta acción</div>
                <form role="form" method="POST" action="{{route('eliminards',$id)}}">
                    @csrf @method('DELETE') 
                    <div class="app-modal-footer">
                        <a href="#" data-dismiss="modal" class="app-btn cancel">Cancelar</a>
                        <button type="submit" class="app-btn a-btn-danger delete">Eliminar</button>
                    </div>  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>