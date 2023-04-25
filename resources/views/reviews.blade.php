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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Styles -->

        <style>
            body {
                background-image: url('/jpg/tree.jpg');
            }
            
        </style>
</head>
<body id="page-top">
@include('layouts/navbar')
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-6"> 
                        <div class="card py-4 h-100 ">
                               
                                <div class="card-body text-center">
                                    
                                <img width="220" src="/jpg/{{$tree->jpg}}" alt="{{$tree->name}}">
                                
                                <div class="details w3-center">
                                    <h3>{{$tree->name}}</h3>
                                    </div>
                            </div>
                              

                    </div>
                 </div>           
            </div>
<section>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8" style="background: #009933">
                    <div>
                        @if(!$reviews->isEmpty())
                        
                        <div class="card-body my-2 mx-2" style="border-radius: 15px;">
                            <div><table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Użytkownik</th>
                                            <th>Komentarz</th>
                                            <th>Data wstawienia</th>
                                            <th>Polubienia</th>
                                        </tr>
                                    </thead>
                                    @foreach ($reviews as $review)
                                    <tbody>
                                    <tr>
                                    <td><p class="featured-text">
                                        {{$review->user->name}}
                                        </p></td>
                                    <td>
                                        <p class="featured-text">
                                        {{$review->message}}
                                        </p>
                                    </td>
                                    <td><p class="featured-text">
                                        {{$review->updated_at}}
                                    </p>
                                    </td>
                                    <td>
                                    <p class="featured-text">
                                        Polubienia&DoubleRightArrow; {{$review->counters->count()}}
                                    </p>
                                    @auth
                                        <a href="{{route('count',$review->id)}}">
                                        <button type="button" class="btn btn-default ">
                                            <span class="glyphicon glyphicon-thumbs-up"></span> Polub
                                        </button></a> 
                                        @if($review->user_id == \Auth::user()->id)
                                        <a href="{{route('delete',$review->id)}}" >
                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-remove"></span> Usuń 
                                        </button></a>
                                        @endif
                                    @endauth
                                    </td>
                                    </tr>
                                    </tbody>
                                   
                                    @endforeach
                                </table> 
                        </div>
                        @else
                        <div class="card-body">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                              Nikt jeszcze nie skomentował
                            </p>
                        </div>
                        @endif
                        @auth
                        <div class="card-footer py-3">
                            <form role="form"  action="{{route('store',$tree->id)}}" id="comment-form" method="post" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="box">
                              <div class="box-body">
                                <div class="form-group{{ $errors->has('message')?'has-error':'' }}" id="roles_box">
                                 <label><b>Dodaj komentarz</b></label> <br>
                                 <textarea name="message" id="message" cols="100" rows="3" required></textarea>
                                </div>
                              </div>
                             </div>
                           <div class="box-footer"><button type="submit" class="btn btn-success">Utwórz</button> 
                           </div>
                          </form>
                        </div>
                        @endauth
                        @guest
                        <div class="card-footer py-3">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                                Zaloguj się, aby dodawać komentarze
                            </p>
                        </div>
                        @endguest
                    </div>
                    </section>  
                    
                    <div class="container py-5">
                     <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
               
</body>
</html>                        
