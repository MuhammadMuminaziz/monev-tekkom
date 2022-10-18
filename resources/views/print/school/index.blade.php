<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table{
            border: 1px solid black;
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 0%;
        }

        .table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body style="border: 1px solid black; font-family: sans-serif">
    
    {{-- Kop Surat --}}
    <table border="1" width="100%" class="table">
        <tr>
            <td rowspan="2" width="100px">
                <img src="" alt="">
            </td>
            <td style="background-color: gray; padding: 5px">
                <h3 style="margin: 0; text-align: center; color: white;">BALAI TEKNOLOGI DAN KOMUNIKASI PENDIDIKAN PROVINSI MALUKU</h3>
            </td>
            <td rowspan="2" width="100px">
                <img src="" alt="">
            </td>
        </tr>
        <tr>
            <td style="background-color: gray; padding: 3px">
                <p style="margin: 0; text-align: center; color: white">FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK (DATA SEKOLAH)</p>
            </td>
        </tr>
    </table>

    
    <table class="table">
        <tr>
            <td width="70%">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo dolore fugiat blanditiis! Assumenda enim expedita recusandae itaque aliquam, aperiam perferendis inventore dolorum molestias dolor ipsum, consectetur modi magnam illo sapiente?</p>
            </td>
            <td width="30%">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt at rem quibusdam omnis dolorem incidunt explicabo atque laudantium qui delectus assumenda voluptates nulla ex ratione nisi, a mollitia itaque. Voluptate.</p>
            </td>
        </tr>
    </table>

    <h1>{{ $school->name }}</h1>
</body>
</html>