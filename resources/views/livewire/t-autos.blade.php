<h2>Listado Automóbiles</h2>
<table class="table">
    <thead>
        <tr>
            <th>Placa</th>
            <th>Color</th>
            <th>Marca</th>
            <th>T.P Vehículo</th>
            <th>Conductor</th>
            <th>Propietario</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($autos as $auto)
            <tr>
                <td>{{ $auto->placa }}</td>
                <td>{{ $auto->color }}</td>
                <td>{{ $auto->id_marca }}</td>
                <td>{{ $auto->tp_auto }}</td>
                <td>{{ $auto->id_con }}</td>
                <td>{{ $auto->id_prop }}</td>
                <td>
                    <button type="submit" wire:click="clickEvt()" class="btn btn-primary">Editar</button>
                </td>
                <td>
                    <button type="submit" wire:click="destroy({{ $auto->id }})"
                        class="btn btn-danger">Elimina</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $autos->links('vendor.pagination.bootstrap-4') }}
