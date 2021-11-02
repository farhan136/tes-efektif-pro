
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <title>Barang EfektifPro</title>
</head>
<body>
    <div class="container">
        <h1>Barang EfektifPro</h1>

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <!-- <script>
    $(function() {
        $('#table-barang').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{!! route('index') !!}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'foto', name: 'foto' },
                { data: 'nama', name: 'nama' },
                { data: 'kode', name: 'kode' },
                { data: 'harga_jual', name: 'harga_jual' },
                { data: 'harga_beli', name: 'harga_beli' },
                { data: 'stok', name: 'stok' },
                {
                        data:'action', 
                        name:'action', 
                        width:'25%',
                        orderable: false,
                        searchable:false
                },
            ]
        });
    });
    </script>
    <script type="text/javascript" src="{{asset('/js/script.js')}}"></script> -->
</body>
</html>