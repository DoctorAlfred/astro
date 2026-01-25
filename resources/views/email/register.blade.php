<!DOCTYPE html>
<html lang="it-IT" style="width:100%;">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Astro - Melahel - Register</title>

      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  </head>

  <body style="margin:0;padding:0;width:100%;height:100vh;background-color:#ffffff;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;font-family:'Montserrat',Arial,sans-serif;">

    <header style="width:100%;margin:0;padding:0;background-color:#ffffff;">
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
            <tr>
                <td align="center" style="padding:20px 0 10px 0;background-color:#081524;">
                    <a href="{{ config('app.frontend') }}" style="display:inline-block;text-decoration:none;">
                        <img src="https://www.melahel.it/astro/public/img/logo.png" alt="Astro"
                            style="display:block;border:0;outline:none;text-decoration:none;width:100%;max-width:200px;height:auto;margin:0 auto;">
                    </a>
                </td>
            </tr>
        </table>
      </header>
    
    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="height:60vh;margin:auto;border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
        <tr>
            <td align="center" style="padding:0 10px 20px 10px;">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0"
                       style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;width:100%;max-width:600px;margin:0 auto;border:1px solid #eaebed;border-radius:16px;">
                    <tr>
                        <td style="padding:24px 20px 24px 20px;text-align:center;">

                            <h2 style="margin:0 0 16px 0;font-size:26px;line-height:1.3;font-weight:700;color:#000000;text-align:center;">
                                Benvenuto su Astro!
                            </h2>

                            <p style="margin:0 0 8px 0;font-size:16px;line-height:1.4;font-weight:400;color:#333333;text-align:center;">
                                Ti sei appena registrato su
                            </p>

                            <p style="margin:0 0 8px 0;font-size:16px;line-height:1.4;font-weight:700;color:#333333;text-align:center;">
                                Astro di Melahel
                            </p>

                            <p style="margin:0 0 8px 0;font-size:16px;line-height:1.4;font-weight:400;color:#333333;text-align:center;">
                                con i seguenti dati:
                            </p>

                            <p style="margin:8px 0 4px 0;font-size:16px;line-height:1.4;font-weight:400;color:#555555;text-align:center;">
                                <span style="color:#575757;font-weight:400;">la tua email:</span>
                                <span style="font-weight:700;color:#2f2f2f;">{{ $data['email'] }}</span>
                            </p>

                            <p style="margin:4px 0 0 0;font-size:16px;line-height:1.4;font-weight:400;color:#555555;text-align:center;">
                                <span style="color:#575757;font-weight:400;">alle ore:</span>
                                <span style="font-weight:700;color:#2f2f2f;">{{ now()->format('H:i:s') }}</span>
                            </p>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <footer style="position:fixed;bottom:0;width:100%;margin:0;padding:0;background-color:#000000;">
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="border-collapse:collapse;mso-table-lspace:0;mso-table-rspace:0;">
            <tr>
                <td align="center" style="padding:12px 10px 12px 10px;">
                    <p style="margin:0;font-size:11px;line-height:1.4;color:#a1a1a1;text-align:center;">
                        Copyright © 2021 - {{ now()->format('Y') }} Astro di Melahel è un marchio registrato da Alfredo Matricciani
                    </p>
                </td>
            </tr>
        </table>
    </footer>

  </body>
</html>
