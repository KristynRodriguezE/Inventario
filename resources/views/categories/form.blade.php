<div class="pl-lg-4">

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="year"> Categoria del producto </label>
            <select name="type" id="tipo_producto" class="form-control">
                <option value="" disabled selected>Seleccione el tipo de producto</option>
                <option value="Herramientas y equipos" {{ old('type', $products->type ?? '') == 'Herramientas y equipos' ? 'selected' : '' }}>Herramientas y equipos</option>
                <option value="Materiales para construcción" {{ old('type', $products->type ?? '') == 'Materiales para construcción' ? 'selected' : '' }}>Materiales para construcción</option>
                <option value="Plomería y fontanería" {{ old('type', $products->type ?? '') == 'Plomería y fontanería' ? 'selected' : '' }}>Plomería y fontanería</option>
                <option value="Pinturas y acabados" {{ old('type', $products->type ?? '') == 'Pinturas y acabados' ? 'selected' : '' }}>Pinturas y acabados</option>
                <option value="Electricidad" {{ old('type', $products->type ?? '') == 'Electricidad' ? 'selected' : '' }}>Electricidad</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="mark">Descripcion</label>
            <input type="text" id="mark" name="mark" class="form-control form-control-alternative"
                placeholder="Ingresar descripcion de la categoria"
                value="{{ old('category', $categories->category) }}">
        </div>
    </div>
</div>

<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar categoria
        </button>
    </div>
</div>
