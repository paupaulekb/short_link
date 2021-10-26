<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Short url</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="/public/js/scripts.js"></script>
    </head>
    <body>
        <main>
            <div class="container">
                <form class="col-md-6 g-0 border rounded shadow-sm h-md-250 container-fluid">
                    <label class="col p-4 row">
                        <input name="start_url" class="form-control">
                    </label>
                    <label class="col p-4 row">
                        <input type="submit" value="Получить Short-url" class="btn btn-lg btn-primary">
                    </label>
                </form>
            </div>
        </main>
    </body>
</html>
