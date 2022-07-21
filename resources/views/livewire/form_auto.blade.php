<form action="#" id="formulario" name="formulario" method="POST" class="row g-3">
    @csrf
    <div class="col-md-6">
        <div class="formulario__grupo" id="grupo__Placa">
            <label for="Placa" class="form__label">Placa</label>
            <input type="text" class="form-control" name="Placa" id="Placa" placeholder="Placa">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">La placa debe contener minimo 6 caracteres.</p>
    </div>

    <div class="col-md-6">
        <div class="formulario__grupo" id="grupo__Color">
            <label for="Color" class="form__label">Color</label>
            <input type="color" class="form-control" name="Color" id="Color" placeholder="Color">
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">Debe seleccionar el color.</p>
    </div>

    <div class="col-12">
        <div class="formulario__grupo" id="grupo__Marca">
            <label for="Marca" class="formulario__label">Marca</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Marca" id="Marca" placeholder="Marca">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Seleccione una Marca.</p>
        </div>
    </div>

    <div class="col-12">
        <div class="formulario__grupo" id="grupo__tp-auto">
            <label for="tp-auto" class="formulario__label">Número de Documento</label>
            <select id="tp-auto" class="form-select">
                <option selected>Seleccione...</option>
                <option value="Particular">Particular</option>
                <option value="Privado">Privado</option>
            </select>
            <i class="formulario__validacion-estado fas fa-times-circle"></i>
        </div>
        <p class="formulario__input-error">Seleccione tipo de Auto.</p>
    </div>

    <div class="col-12">
        <div class="formulario__grupo" id="grupo__Conductor">
            <label for="Conductor" class="formulario__label">Conductor</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="Conductor" id="Conductor">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe ser un número Celular valido para Colombia.</p>
        </div>
    </div>

    <div class="formulario__grupo formulario__grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Enviar</button>
        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
    </div>
</form>
<script src="{{ asset('js/formulario.js') }}"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
