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
                <option value="Martillos" {{ old('type', $products->type ?? '') == 'Martillos' ? 'selected' : '' }}>Martillos</option>
                <option value="Sierras" {{ old('type', $products->type ?? '') == 'Sierras' ? 'selected' : '' }}>Sierras</option>
                <option value="Taladros" {{ old('type', $products->type ?? '') == 'Taladros' ? 'selected' : '' }}>Taladros</option>
                <option value="Llaves" {{ old('type', $products->type ?? '') == 'Llaves' ? 'selected' : '' }}>Llaves</option>
                <option value="Destornilladores" {{ old('type', $products->type ?? '') == 'Destornilladores' ? 'selected' : '' }}>Destornilladores</option>
                <option value="Pinzas" {{ old('type', $products->type ?? '') == 'Pinzas' ? 'selected' : '' }}>Pinzas</option>
                <option value="Tubería PVC" {{ old('type', $products->type ?? '') == 'Tubería PVC' ? 'selected' : '' }}>Tubería PVC</option>
                <option value="Tornillos" {{ old('type', $products->type ?? '') == 'Tornillos' ? 'selected' : '' }}>Tornillos</option>
                <option value="Clavos" {{ old('type', $products->type ?? '') == 'Clavos' ? 'selected' : '' }}>Clavos</option>
                <option value="Cemento" {{ old('type', $products->type ?? '') == 'Cemento' ? 'selected' : '' }}>Cemento</option>
                <option value="Adhesivos" {{ old('type', $products->type ?? '') == 'Adhesivos' ? 'selected' : '' }}>Adhesivos</option>
                <option value="Bombas de agua" {{ old('type', $products->type ?? '') == 'Bombas de agua' ? 'selected' : '' }}>Bombas de agua</option>
                <option value="Grifos" {{ old('type', $products->type ?? '') == 'Grifos' ? 'selected' : '' }}>Grifos</option>
                <option value="Mangueras" {{ old('type', $products->type ?? '') == 'Mangueras' ? 'selected' : '' }}>Mangueras</option>
                <option value="Pintura" {{ old('type', $products->type ?? '') == 'Pintura' ? 'selected' : '' }}>Pintura</option>
                <option value="Barniz" {{ old('type', $products->type ?? '') == 'Barniz' ? 'selected' : '' }}>Barniz</option>
                <option value="Brochas" {{ old('type', $products->type ?? '') == 'Brochas' ? 'selected' : '' }}>Brochas</option>
                <option value="Rodillos" {{ old('type', $products->type ?? '') == 'Rodillos' ? 'selected' : '' }}>Rodillos</option>
                <option value="Solventes" {{ old('type', $products->type ?? '') == 'Solventes' ? 'selected' : '' }}>Solventes</option>
                <option value="Cables" {{ old('type', $products->type ?? '') == 'Cables' ? 'selected' : '' }}>Cables</option>
                <option value="Enchufes" {{ old('type', $products->type ?? '') == 'Enchufes' ? 'selected' : '' }}>Enchufes</option>
                <option value="Interruptores" {{ old('type', $products->type ?? '') == 'Interruptores' ? 'selected' : '' }}>Interruptores</option>
                <option value="Focos" {{ old('type', $products->type ?? '') == 'Focos' ? 'selected' : '' }}>Focos</option>
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
