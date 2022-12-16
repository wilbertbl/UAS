<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop Promo Berlaku PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Wilbert Bernard Lo</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200027</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>Promo Yang Mash Berlaku!</strong><br />
        &nbsp;</p>

    <table class="table" id="DataTables">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Masih Berlaku</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promo_berlaku as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal_mulai_berlaku }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p style="text-align:center"><strong>Copyright Wilbert Bernard Lo (03081200027)</strong></p>


</body>

</html>
