<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <style type="text/css">
            small {
                font-size: 11px;
            }

            a {
                text-decoration: none;
            }
            
            .body {
                background-color: #1d0f4a;
                color: #ffffff;
                font-family: sans-serif;
            }

            .table {
                width: 100%;
                margin: 0 auto;
            }

            .table-email {
                font-size: 16px;
                line-height: 20px;
                max-width: 480px;
            }

            .email-header,
            .email-body,
            .email-footer {
                padding-left: 16px;
                padding-right: 16px;
            }

            .email-header {
                background-color: #110E2B;
                font-size: 20px;
                padding-top: 16px;
                padding-bottom: 16px;
                text-align: center;
            }
            
            .email-body,
            .email-footer {
                background-color: #d1cfda;
                color: #0c0c0c;
            }

            .email-body {
                padding-top: 32px;
                padding-bottom: 24px;
            }

            .email-footer {
                font-size: 12px;
                line-height: 16px;
                padding-top: 8px;
                padding-bottom: 24px;
            }

            .email-footer-td {
                border-top: 1px solid #b7b5c0;
                padding-top: 16px;
            }

            .btn {
                border: 0;
                border-radius: 16px;
                background-color: #ffffff;
                color: #00ac98;
                cursor: pointer;
                font-weight: bold;
                font-size: 18px;
                height: 48px;
                line-height: 48px;
                display: block;
                text-align: center;
                width: auto;
                max-width: 320px;
                margin: auto;
            }

            /* Utils */

            .text-center {
                text-align: center;
            }

            .pt-2 {
                padding-top: 16px;
            }

            .pt-3 {
                padding-top: 24px;
            }

        </style>
    </head>
    <body class="body">
        <table border="0" cellspacing="0" class="table table-email">
            <tbody>
                <tr>
                    <td class="email-header">@yield('header')</td>
                </tr>
                <tr>
                    <td class="email-body">@yield('body')</td>
                </tr>
                <tr>
                    <td class="email-footer">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="email-footer-td">@yield('footer')</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>