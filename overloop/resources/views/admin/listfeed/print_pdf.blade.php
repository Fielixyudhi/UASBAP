<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop listfeed PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Fielix Yudhianto</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200033</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>berikut listfeed overloop</strong><br />
        &nbsp;</p>

        <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>kolomnama</th>
                    <th>email</th>
                    <th>kolomkomentar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listfeed as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kolomnama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->kolomkomentar }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>

    <p style="text-align:center"><strong>Copyright Fielix Yudhianto</strong></p>


</body>

</html>