<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
        }
    </style>
    <meta charset="utf-8">
    <base href="/">

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Service worker support is disabled by default.
         Install the worker script and uncomment to enable.
         Only enable service workers in production.
    <script type="text/javascript">
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/worker.js').catch(function(err) {
          console.log('Error installing service worker: ', err);
        });
      }
    </script>
    -->
</head>
<body>
<div class="container">
    <div class="content">
        <main-app>Wczytywanie...</main-app>
        <div class="title">SEBA.<small>space</small></div>
    </div>
</div>

<script src="{{ URL::asset('vendor/es6-shim/es6-shim.js') }}"></script>
<script src="{{ URL::asset('vendor/reflect-metadata/Reflect.js') }}"></script>
<script src="{{ URL::asset('vendor/systemjs/dist/system-polyfills.js') }}"></script>
<script src="{{ URL::asset('vendor/systemjs/dist/system.src.js') }}"></script>
<script src="{{ URL::asset('vendor/zone.js/dist/zone.js') }}"></script>

<script>
    System.import('{{ URL::asset('system-config.js') }}').then(function () {
        System.import('main');
    }).catch(console.error.bind(console));
</script>
</body>
</html>
