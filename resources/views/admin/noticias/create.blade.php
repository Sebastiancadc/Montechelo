<div class="col-md-4">

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary border-0 mb-0">

              <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        <small>Crea el usuario</small>
                    </div>
                    <form role="form" method="POST" action="{{ url('admin/crearnoticia') }}" enctype="multipart/form-data" >
                        @csrf @method('POST')
                        <input type="hidden" name="user_id"  value="{{$user->id }}";>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Titulo de la publicación" name="title" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="form-group mb-3">
                                            <select class="form-control" id="exampleFormControlSelect1" name="category_id" id="category_id">
                                                @foreach ($categoria as $category)
                                                <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                                <div class="form-group">

                                    <div class="input-group input-group-merge input-group-alternative">
                                        <textarea class="form-control" placeholder="Descripción de la publicación" rows="3" name="body">{{ old('body') }}</textarea>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input type="file"  class="form-control form-control-alternative" placeholder="" value="" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Crear</button>
                            <button class="btn btn-danger ml-auto" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
