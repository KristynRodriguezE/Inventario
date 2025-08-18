<div class="pl-lg-4">

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="representative_name">Nombre del representante</label>
            <input type="text" id="representative_name" name="representative_name" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre del representante del proveedor"
                value="{{ old('representative_name', $suppliers->representative_name) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="company_name">Nombre de la compañia</label>
            <input type="text" id="company_name" name="company_name" class="form-control form-control-alternative"
                placeholder="Ingresar el nombre de la compañia del proveedor"
                value="{{ old('company_name', $suppliers->company_name) }}">
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
            <label class="form-control-label" for="phone_number">Numero de contacto</label>
            <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative"
                placeholder="Ingresar el numero de telefono del proveedor"
                value="{{ old('phone_number', $suppliers->phone_number) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="email">Correo del proveedor</label>
            <input type="text" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingresar el correo del proveedor"
                value="{{ old('email', $suppliers->email) }}">
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
