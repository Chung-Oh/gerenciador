<div class="container d-flex justify-content-center my-3">
    <button id="new" type="button" class="btn btn-primary btn-lg ffamily-nunito font-weight-bold btn-block col-xl-2 col-lg-3 col-md-4 col-sm-5 new" data-toggle="modal" data-target="#invoiceModal">Novo</button>
</div>

<div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title ffamily-open font-weight-bolder" id="invoiceModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-dark">
                <form>
                    <div class="form-group">
                        <label for="title" class="col-form-label font-weight-bold text-white ffamily-open">Título</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label font-weight-bold text-white ffamily-open">Nota</label>
                        <textarea class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label font-weight-bold text-white ffamily-open">Categoria</label>
                        <div class="d-flex justify-content-center">
                            <select id="category_id" class="form-control col-lg-4 col-lg-4 col-md-4 col-sm-4 col-6" required>
                                <option value="" selected disabled>Selecionar</option>
                                @foreach($categories as $cat)
                                    <option class="font-weight-bold" value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-danger ffamily-barlow" data-dismiss="modal">Cancelar</button>
                <button id="insert" type="button" class="btn btn-primary ffamily-barlow"></button>
            </div>
        </div>
    </div>
</div>