<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>PRODUCT DETAILS</h1>

   Product name : <h3>{{ $product->name }}</h3>
   Product category : <h3>{{ $product->category }}</h3>
   Product price : <h3>{{ $product->price }}</h3>
   Product description : <h3>{{ $product->description}}</h3>
<br><br>
   <img height="250" width="450" src="product/{{ $product->image }}">
</body>
</html>
