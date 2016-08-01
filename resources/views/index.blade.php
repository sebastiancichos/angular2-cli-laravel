<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Main</title>
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
<main-app>Loading...</main-app>

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
