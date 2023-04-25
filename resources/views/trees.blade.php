<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DeepTree</title>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
        <!-- Styles -->

        <style>
            body {
                background-image: url('/jpg/tree.jpg');
            }
            
        </style>
    </head>
<body id="page-top">
@include('layouts/navbar')
<section class=""> 
    @foreach($trees as $tree)
    <br/>
            <div class="container px-4 px-lg-5">
                <div class=" gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                    <a href="{{ route('show', $tree->id) }}">
                                    <div id={{$tree->id}}>
                                    <img width="200" src="/jpg/{{$tree->jpg}}" alt="{{$tree->name}}">
                                        <div class="details">
                                            <h3>{{$tree->name}}</h3>
                                        </div>
                                    </div>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        @endforeach
        </section> 
</body>
</html>