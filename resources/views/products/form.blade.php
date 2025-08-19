<div class="pl-lg-4">

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="name">Nombre del producto</label>
            <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre del producto"
                value="{{ old('name', $products->name) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="price">Precio del producto</label>
            <input type="text" id="price" name="price" class="form-control form-control-alternative"
                placeholder="Ingresar el precio del producto"
                value="{{ old('price', $products->price) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="type">Tipo de producto</label>
            <input type="text" id="type" name="type" class="form-control form-control-alternative"
                placeholder="Ingresar el tipo del producto"
                value="{{ old('type', $products->type) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="year"> Tipo de producto </label>
            <select name="type" id="tipo_producto" class="form-control">
                <option value="" disabled selected>Seleccione el tipo de producto</option>
                <option value="Materiales de construccion" {{ old('type', $products->type ?? '') == 'Materiales construccion' ? 'selected' : '' }}>Materiales de Construcción</option>
                <option value="Herramientas manuales" {{ old('type', $products->type ?? '') == 'Herramientas manuales' ? 'selected' : '' }}>Herramientas Manuales</option>
                <option value="Herramientas electricas" {{ old('type', $products->type ?? '') == 'Herramientas electricas' ? 'selected' : '' }}>Herramientas Eléctricas</option>
                <option value="Fontaneria" {{ old('type', $products->type ?? '') == 'Fontaneria' ? 'selected' : '' }}>Fontanería</option>
                <option value="Electricidad" {{ old('type', $products->type ?? '') == 'Electricidad' ? 'selected' : '' }}>Material Eléctrico</option>
                <option value="Pinturas" {{ old('type', $products->type ?? '') == 'Pinturas' ? 'selected' : '' }}>Pinturas y Accesorios</option>
                <option value="Tornillería y Herrajes" {{ old('type', $products->type ?? '') == 'Tornillería y Herrajes' ? 'selected' : '' }}>Tornillería y Herrajes</option>
                <option value="Jardineria" {{ old('type', $products->type ?? '') == 'Jardineria' ? 'selected' : '' }}>Jardinería</option>
                <option value="Adhesivos" {{ old('type', $products->type ?? '') == 'Adhesivos' ? 'selected' : '' }}>Adhesivos y Selladores</option>
                <option value="Seguridad" {{ old('type', $products->type ?? '') == 'Seguridad' ? 'selected' : '' }}>Equipo de Seguridad</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="physical_Address">Dirección del proveedor</label>
            <input type="note" id="physical_Address" name="physical_Address" class="form-control form-control-alternative"
                placeholder="Ingresar la Dirección fisica del proveedor"
                value="{{ old('physical_Address', $suppliers->physical_Address) }}">
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
