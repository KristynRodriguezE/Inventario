<div class="pl-lg-4">

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="unit_price">Precio unitario</label>
                <input type="text" id="unit_price" name="unit_price" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre de la marca"
                    value="{{ old('unit_price', $productentries->unit_price) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="quantity">Cantidad</label>
                <input type="text" id="quantity" name="quantity" class="form-control form-control-alternative"
                    placeholder="Ingresar la cantidad del producto"
                    value="{{ old('quantity', $productentries->quantity) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date">Fecha de entrada</label>
                <input type="date" id="date" name="date" class="form-control form-control-alternative"
                    placeholder="Ingresar la Fecha de entrada"
                    value="{{ old('date', $productentries->date) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripcion</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar descripcion"
                    value="{{ old('description', $productentries->description) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="year">Tipo de entrada</label>
            <select name="type" id="tipo_producto" class="form-control">
                <option value="" disabled selected>Seleccione el tipo de entrada</option>
                <option value="Compra" {{ old('input_type', $productentries->input_type ?? '') == 'Compra' ? 'selected' : '' }}>Compra</option>
                <option value="Devoluciones" {{ old('input_type', $productentries->input_type ?? '') == 'Devoluciones' ? 'selected' : '' }}>Devoluciones</option>
                <option value="Traslados Internos" {{ old('input_type', $productentries->input_type ?? '') == 'Traslados Internos' ? 'selected' : '' }}>Traslados Internos</option>
            </select>
        </div>
    </div>
</div>

<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Registrar Entrada de Producto
        </button>
    </div>
</div>

