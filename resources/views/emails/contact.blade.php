<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru - Surya Citra Technology</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">

    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        
        <h2 style="color: #00A894; border-bottom: 2px solid #00A894; padding-bottom: 10px;">
            Pesan Baru
        </h2>

        <p>Halo Admin, berikut adalah detail pesan yang masuk:</p>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 10px; background-color: #f8f9fa; width: 150px; font-weight: bold;">Nama</td>
                <td style="padding: 10px;">{{ $name }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f8f9fa; font-weight: bold;">Email</td>
                <td style="padding: 10px;">{{ $email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f8f9fa; font-weight: bold;">No. Telepon</td>
                <td style="padding: 10px;">{{ $phone }}</td>
            </tr>
        </table>

        <div style="margin-top: 20px;">
            <p style="font-weight: bold; background-color: #f8f9fa; padding: 10px;">Isi Pesan:</p>
            <p style="padding: 10px; border: 1px dashed #ccc; background-color: #fff;">
                {{ $user_message }}
            </p>
        </div>

        <p style="font-size: 12px; color: #777; margin-top: 30px; text-align: center;">
            Email ini dikirim otomatis oleh sistem Website Surya Citra Technology.
        </p>
    </div>

</body>
</html>