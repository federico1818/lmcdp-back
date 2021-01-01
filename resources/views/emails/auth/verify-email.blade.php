@extends('layouts.email')
@section('header', 'Verificar email')
@section('body')
    <table>
        <tbody>
            <tr>
                <td>Por favor, haz click en el botón a continuación para verificar tu dirección de correo electrónico.</td>
            </tr>
            <tr>
                <td class="pt-2">
                    <a class="btn" href="{{ $url }}" target="_blank">Verificar email</a>
                </td>
            </tr>
            <tr>
                <td class="pt-3">
                    Si no has creado una cuenta, no es necesaria ninguna acción, sólo ignora el mensaje.
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('footer')
    Si tienes problemas al hacer click en el botón, puedes copiar y pegar la siguiente URL:  <a href="{{ $url }}" target="_blank">{{ $url }}</a>
@endsection