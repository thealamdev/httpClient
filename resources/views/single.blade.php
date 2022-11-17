<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post view</title>
    
</head>
<style>
    *{
        margin: 0;
        padding:0;
        outline: 0;
    }
    body{
        background: #FAF7F0;
    }

    .container{
        width:1170px;
        margin:0 auto;
    }

    .form_main{
        border-radius: 6px;
        border: 1px solid #ffffffe1;
        padding:30px;        
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .form_main h3{
        font-size: 32px;
        color:#222;
        font-family: 'Roboto-slab';
        font-weight: 700;
        padding:10px;
    }

    .card span{
        font-size: 22px;
        color:#111;
        font-family: 'Roboto-slab';
        font-weight: 400;
        padding-bottom:10px;
    }

    .card strong{
        font-size: 25px;
        color:#111;
        font-family: 'Roboto-slab';
    }
</style>
<body>
    {{-- /* <h1>This is post view page</h1> */ --}}
    {{-- {{ $response = $responses->collect()}} --}}

    {{-- @foreach ($response as $single_response)
    
       <h3>Post Title: {{ $single_response['title'] }}</h3>
       <h4>Post body: {{ $single_response['body'] }}</h4>
    @endforeach --}}

    <div class="container">
        <div class="form_main">
            <h3>Students Information</h3>
             
            <div class="card">
                <strong>Student Name: </strong> <span>{{ $responses['title'] }}</span>
                <br>
                <strong>Student City: </strong> <span>{{ $responses['body'] }}</span>
 
            </div>
        </div>
    </div>
 

</body>
</html>
 