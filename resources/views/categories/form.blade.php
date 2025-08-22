<div class="pl-lg-4">

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="mark">Nombre de la Categoria</label>
            <input type="text" id="mark" name="mark" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre de la marca"
                value="{{ old('mark', $marks->mark) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="mark">numero de la Categoria</label>
            <input type="text" id="mark" name="mark" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre de la marca"
                value="{{ old('mark', $marks->mark) }}">
        </div>
    </div>
</div>

<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar marca
        </button>
    </div>
</div>
