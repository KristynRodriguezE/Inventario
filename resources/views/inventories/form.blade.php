<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Ingresar nombre del stock</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar el nombre del producto"
                    value="{{ old('name', $inventories->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="mode">Modo de la carrera</label>
                <select name="mode" id="mode" class="form-control">
                    <option value="" disabled>Seleccione el Modo de la Carrera</option>
                    <option value="Presencial" {{ old('mode', $careers->mode ?? '')=='Presencial' ? 'selected': ''}}>Presencial</option>
                    <option value="Virtual " {{ old('mode', $careers->mode ?? '')=='Virtual' ? 'selected': ''}}>Virtual</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="shift">Turno de la Carrera</label>
                <select name="shift" id="shift" class="form-control">
                    <option value="" disabled>Seleccione el Turno de la Carrera</option>
                    <option value="Matutino" {{ old('shift', $careers->shift ?? '')=='Matutino' ? 'selected': ''}}>Matutino</option>
                    <option value="Vespertino " {{ old('shift', $careers->shift ?? '')=='Vespertino' ? 'selected':'' }}>Vespertino</option>
                    <option value="Sabatino" {{ old('shift', $careers->shift ?? '')=='Sabatino' ? 'selected': ''}}>Sabatino</option>
                    <option value="Dominical " {{ old('shift', $careers->shift ?? '')=='Dominical' ? 'selected': ''}}>Dominical</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_career">Código de la Carrera</label>
                <input type="text" id="code_career" name="code_career" class="form-control form-control-alternative"
                    placeholder="Ingresar el código de la carrera"
                    value="{{ old('code_career', $careers->code_career) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="duration">Duración de la Carrera</label>
                <select name="duration" id="duration" class="form-control">
                    <option value="" disabled>Seleccione La Duración de la Carrera</option>
                    <option value="1 años" {{ old('duration', $careers->duration ?? '')=='1 año' ? 'selected': ''}}>1 años</option>
                    <option value="2 años " {{ old('duration', $careers->duration ?? '')=='2 años' ? 'selected':'' }}>2 años</option>
                    <option value="3 años" {{ old('duration', $careers->duration ?? '')=='3 años' ? 'selected': ''}}>3 años</option>
                    <option value="4 años " {{ old('duration', $careers->duration ?? '')=='4 años' ? 'selected': ''}}>4 años</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="specialty">Especialidad de la Carrera</label>
                <select name="specialty" id="specialty" class="form-control">
                    <option value="" disabled>Seleccione La Especialidad de la Carrera</option>
                    <option value="Técnico Especialista" {{ old('specialty', $careers->specialty ?? '')=='Técnico Especialista' ? 'selected': ''}}>Técnico Especialista</option>
                    <option value="Ingeneria" {{ old('specialty', $careers->specialty ?? '')=='Ingeneria' ? 'selected': ''}}>Ingeneria</option>
                    <option value="Medicina " {{ old('specialty', $careers->specialty ?? '')=='Medicina' ? 'selected': ''}}>Medicina</option>
                    <option value="Psocologia" {{ old('specialty', $careers->specialty ?? '')=='Psocologia' ? 'selected': ''}}>Psocologia</option>
                </select>
            </div>
        </div>
    </div>

</div>


<hr class="my-4">

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl -lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Carrera
        </button>
    </div>
</div>
