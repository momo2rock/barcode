<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcodes</title>
    <link rel="stylesheet" href="css/boostrap.min.css">
    <style>
        .row{
            margin:0px;
        }
        h2{
            margin-top:60px;
        }
    </style>
</head>
<body>
    <div class="row">
        @foreach($barcodes as $list)
        <div class="col-md-4">
            <!-- <div><img src="data:image/png;base64,{{DNS1D::getBarcodePNG($list->barcode, 'C39', 1, 60)}}" alt="barcode" /></div> -->
            <div><img src="{{Storage::disk('local')->url('barcodes/'.$list->barcode)}}.png" alt="barcode" /></div>
            <h2>
            {{$list->nom}}
            </h2>
            <h2>
            {{$list->barcode}}
            </h2>
        </div>
    @endforeach
    </div>
</body>
</html>