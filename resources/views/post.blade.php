<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post view</title>
</head>
<body>
    <h1>This is post view page</h1>
    {{-- {{ $response = $responses->collect()}} --}}

    @foreach ($response as $single_response)
    
       <h3>Post Title: {{ $single_response['title'] }}</h3>
       <h4>Post body: {{ $single_response['body'] }}</h4>
    @endforeach

 

</body>
</html>
 