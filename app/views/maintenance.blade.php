<!doctype html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<title>
    {{ Config::get('cms.error') }} - Site Maintenance
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ Config::get('cms.error') }}">
<meta name="author" content="Graham Campbell">
<style type="text/css">
    body{text-align:center;font:20px Helvetica, sans-serif;color:#333;padding:150px;}
    h1{font-size:50px;}
    article{display:block;text-align:left;width:650px;margin:0 auto;}
    a{color:#dc8100;text-decoration:none;}
    a:hover{color:#333;text-decoration:none;}
</style>
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<article>
    <h1>We'll be back soon!</h1>
    <div>
        <p>
            Sorry for the inconvenience, but we're performing some maintenance at
            the moment. Most site maintenance takes under 5 minutes, so you can
            expect us to be back online shortly!
        </p>
        <p>
            — {{ Config::get('cms.error') }}
        </p>
    </div>
</article>
</body>
</html>
