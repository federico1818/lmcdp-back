@extends('layouts.email')
@section('header', 'Recuperar contraseña')
@section('body')
    <table>
        <tbody>
            <tr>
                <td>Estás recibiendo este email porque hemos recibido una solicitud para recuperar la contraseña</td>
            </tr>
            <tr>
                <td>
                    <a href="#">Reestablecer contraseña</a>
                </td>
            </tr>
            <tr>
                <td>
                    <small>Este link expirará en 60 minutos</small>
                </td>
            </tr>
            <tr>
                <td>
                    Si no lo has solicitado, no es necesaria ninguna acción, sólo ignora el mensaje.
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('footer')
    Si tienes problemas al hacer click en el botón, puedes copiar y pegar la siguiente URL:  <a href="#">url</a>
@endsection