<h2>Listado Personas</h2>
<table class="table">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Ciudad</th>
        <tr colspan="2">&nbsp;</tr>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->documento }}</td>
                <td>{{ $persona->nom1 }}</td>
                <td>{{ $persona->nom2 }}</td>
                <td>{{ $persona->ape }}</td>
                <td>{{ $persona->dir }}</td>
                <td>{{ $persona->tel }}</td>
                <td>{{ $persona->ciudad }}</td>
                <td>
                    <button type="submit" wire:click="clickEvt()" class="btn btn-primary">Editar</button>
                </td>
                <td><button wire:click="destroy({{ $persona->documento }})" class="btn btn-danger">Eliminar</button></td>

            </tr>
        @endforeach
    </tbody>
</table>
{{ $personas->links('vendor.pagination.bootstrap-4') }}
