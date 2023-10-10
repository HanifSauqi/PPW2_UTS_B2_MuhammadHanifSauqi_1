@extends('layout.app')  

@section('content')

        <tbody>
            @foreach ($data_pemain as $a)
                <tr>
                    <td>{{ $a->nama_pemain }}</td>
                    <td>{{ $a->no_punggung }}</td>
                    <td>{{ $a->posisi }}</td>
                </tr>
            @endforeach
        </tbody>

@endsection