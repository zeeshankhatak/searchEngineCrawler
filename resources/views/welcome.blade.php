<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
				font-family: Arial;
            }

            * {
				box-sizing: border-box;
            }

            form.example input[type=text] {
				padding: 10px;
				font-size: 17px;
				border: 1px solid grey;
				float: left;
				width: 80%;
				background: #f1f1f1;
            }

            form.example button {
				float: left;
				width: 20%;
				padding: 10px;
				background: #2196F3;
				color: white;
				font-size: 17px;
				border: 1px solid grey;
				border-left: none;
				cursor: pointer;
            }

            form.example button:hover {
				background: #0b7dda;
            }

            form.example::after {
				content: "";
				clear: both;
				display: table;
            }
        </style>
    </head>
    <body class="antialiased">
		<h2>Crawl Search Engine</h2>
		<p>Custom Google Search Bar</p>
		<form class="example" action="{{url('/search')}}" method="POST" style="margin:auto;max-width:300px">
			@csrf
			<input type="text" placeholder="Search.." name="search2">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
    </body>
</html>
