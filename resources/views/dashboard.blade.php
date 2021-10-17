<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miner Go</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/css/dashboard.css') }}">

    {{-- Google Map --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
</head>

<body onload="startTime()" class="pb-5">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand"><img id="logo" src="{{ url('/images/logo.png') }}" height="80" width="80"
                alt="Image" /></a>
        <div id="mine_clock"></div>
    </nav>

    <div class="container m-4">
        <div class="row">
            <div class="col-sm-12">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 text-left">
                <div id="mymap"></div>
            </div>
            <div class="col-sm-3 text-right">
                <p>notifications</p>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

<script>
    //clock
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let h2 = today.getHours() % 12 || 12;
        let m = today.getMinutes();
        let s = today.getSeconds();
        var amOrPm = (h < 12) ? "am" : "pm";

        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('mine_clock').innerHTML = h2 + ":" + m + ":" + s + " " + amOrPm;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        };
        return i;
    }

    //map
    var mymap = new GMaps({
        el: '#mymap',
        lat: 6.7056,
        lng: 80.3847,
        zoom: 12
    });

    mymap.addMarker({
        lat: 6.7056,
        lng: 80.3847,
        title: Ratnapura,
        click: function(e) {
            alert('This is Rathnapura from Sri Lanka.');
        }
    });
</script>

</html>
