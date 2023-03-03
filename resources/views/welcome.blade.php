<!doctype html>
<html lang="en">
    <head>
        <meta charset = "utf-8"/>
        <meta name = "viewport" content="widht=device-widht, initial-scale=1">
        <title>bootstrap</title>
        <!---styles--->
        @vite([
            'resouces/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
    </head>
    <body>
        <div class="container py-4 px-3 mx-auto">
            <h1>hello bootstrap and vite!</h1>
            <button class="btn btn-primary">Primary button</button>
        </div>
    </body
</html>