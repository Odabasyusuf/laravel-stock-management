<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Yazdır</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{url('/')}}/assets/admin/mobile/css/vendor/bootstrap.min.css" />

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">



    <style>
        .servis1{
            text-align: center;
        }
        .servis2{
            text-align: center; margin-top: -5px;
            font-size: 15px;
        }

        .ust-bilgiler{
            font-size: 12px;

        }
        .ust-bilgiler th{
            width: 25%;
            text-decoration: underline;
        }

        .ust-bilgiler th, .ust-bilgiler td {
            padding: .10rem !important;
        }

        .toplam_dm3{
            position: absolute;
            right: 10px;
            margin-top: 5px;
            font-size: 15px;
        }
        .detay-tablosu th{
            text-align: center;
            font-size: 13px;
        }
        .detay-tablosu td{
            font-size: 13px;
            text-align: center;
        }

    </style>
</head>

<body id="app-container" class="menu-default">

<div class="card" style="margin: 10px 10px; border: none">
    @foreach($partiHepsi as $parti)

        <h6 class="servis1">{{$parti->servis1}}</h6>
        <p class="servis2">{{$parti->servis2}}</p>

    <hr style="margin-top: -8px;"/>

    <div class="container2">
        <table class="table table-borderless ust-bilgiler">
            <thead>
            <tr>
                <th scope="col">Müşteri</th>
                <th scope="col">Parti No</th>
                <th scope="col" style="">Ağaç Kalite</th>
                <th scope="col" style="text-align: center;">Tarih</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$parti->musteriadi}}</td>
                <td>{{$parti_id}}</td>
                <td style="">{{$parti->agac_turu}} {{$parti->urun_kalitesi}}</td>
                <td style="text-align: center;">04.07.2021</td>
            </tr>
            </tbody>
        </table>
    </div>


        <hr style="margin-top: -8px;"/>

    @endforeach
        <table class="table-bordered detay-tablosu" >
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kln</th>
                <th scope="col">En</th>
                <th scope="col">Boy</th>
                <th scope="col">Dm3</th>
                <th scope="col">#</th>
                <th scope="col">Kln</th>
                <th scope="col">En</th>
                <th scope="col">Boy</th>
                <th scope="col">Dm3</th>
            </tr>
            </thead>
            <tbody>
           <!-- count($datas); -->
            @for ($i = 0; $i < count($datas)-1; $i++)
                <tr>
                    @if($i%2 ==0)
                    <td>{{$datas[$i]['sira']}}</td>
                    <td>{{$datas[$i]['kln']}}</td>
                    <td>{{$datas[$i]['en']}}</td>
                    <td>{{$datas[$i]['boy']}}</td>
                    <td><strong>{{$datas[$i]['toplam_dm']}}</strong></td>

                    <td>{{$datas[$i+1]['sira']}}</td>
                    <td>{{$datas[$i+1]['kln']}}</td>
                    <td>{{$datas[$i+1]['en']}}</td>
                    <td>{{$datas[$i+1]['boy']}}</td>
                    <td><strong>{{$datas[$i+1]['toplam_dm']}}</strong></td>
                    @endif

                        @if($i%2==1 && $i==count($datas)-2)
                        <td>{{$datas[$i+1]['sira']}}</td>
                        <td>{{$datas[$i+1]['kln']}}</td>
                        <td>{{$datas[$i+1]['en']}}</td>
                        <td>{{$datas[$i+1]['boy']}}</td>
                        <td><strong>{{$datas[$i+1]['toplam_dm']}}</strong></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong></strong></td>
                        @endif

                </tr>

            @endfor
            </tbody>
        </table>

    <div>
        <div class="toplam_dm3"> Toplam : <?php echo abs($parti->toplam_dm3); ?> dm³</div>
    </div>
</div>

<script>
    setTimeout(function(){
        window.print();
    }, 1000);


</script>



</body>
</html>
