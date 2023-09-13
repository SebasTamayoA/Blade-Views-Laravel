@extends('layout')

@section('content')
    @isset($paises)
        <h1 class="text-center">Información de Países</h1>
        <div class="table-responsive mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>País</th>
                        <th>Capital</th>
                        <th>Moneda</th>
                        <th>Población</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Ordena los países en base a la clave "ordenar_por" y "orden"
                        $orden = $orden;
                        $ordenarPor = $ordenar_por;
                        array_multisort(array_column($paises, $ordenarPor), constant("SORT_" . strtoupper($orden)), $paises);

                        // Define el número máximo de registros a mostrar
                        $maxRegistros = $registros_a_mostrar;
                    @endphp

                    @foreach ($paises as $nombre => $pais)
                        @if ($pais['poblacion'] >= $poblacion_minima)
                            @if ($loop->iteration <= $maxRegistros)
                                <tr>
                                    <td>{{ $nombre }}</td>
                                    <td>{{ $pais['capital'] }}</td>
                                    <td>{{ $pais['moneda'] }}</td>
                                    <td>{{ number_format($pais['poblacion'] / 1000, 3, '.', "'") }}</td>
                                    <td>{{ $pais['descripcion'] }}</td>
                                </tr>
                            @endif
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endisset
@endsection
