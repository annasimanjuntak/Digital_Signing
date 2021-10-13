<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @dd($data) --}}
    @foreach ($data as $image)


    <div class="row">
        <img src="{{ asset('storage/image/'. $image->base64) }}" alt="">
    </div>
    @endforeach
</body>
</html>
