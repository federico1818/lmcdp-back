<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <style type="text/css">
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
                padding-bottom: 32px;
            }

            .email-footer {
                padding-top: 8px;
                padding-bottom: 8px;
                font-size: 12px;
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
                    <td class="email-footer">@yield('footer')</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>