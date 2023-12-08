@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Pages1</h1>
@stop

@php
    $heads = [
        'ID', 
        'Name', 
        [
            'label' => 'Phone',
            'width' => 40
        ]
    ];
    
    $config = [
        'order' => [
            [1, 'asc']
        ],
    ];
@endphp

@section('content')
    <x-adminlte-datatable id="table1" :heads="$heads">
        @foreach ($data as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
