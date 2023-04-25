<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>DeepTree</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <style>
        body{
            background-color: #999999;
        }
        .title{
            text-align: center;
            background-color: transparent
        }
        .table-container{
            background-color: white;
            max-width: 900px;
            margin: 0 auto;
        }   
        .footer-button{
            background-color: transparent;
            float: right;
            margin-top: 3%;
        }
        table{
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
@include('layouts/navbar')
<body>
    <div class="table-container">
        <section class="about-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-black mb-4">Każda opinia na wagę złota</h2>
                        <p class="text-black-50">
                         W naszym projekcie każda opinia jest rownoważna drzewu, więc za każdą opinie sadzimy drzewo.
                         Im więcej opinii tym więcej drzew można posadzić.
                         <div class="project-text w-100 my-auto text-center">
                             Ale co właściwie napisać?
                         </div>
                        </p>
                        <p class="text-black-50">
                         Chcemy usłyszeć od was opinię, czy projekt podoba wam się. Każdy nawet najbardziej szczegółowy komentarz przeczytamy.
                         Ale nie musi to być tylko opinia, napiszcie nam również czy weźmiecie udział w projekcie. Możecie również podsunąć swoje
                         pomysły. Chętnie poznamy wasz punkt widzenia.
                    </div>
                </div>
            </div>
        </section>
        @auth
        <table data-toggle="table">
            <thead>
                <tr>
                    <th>Użytkownik</th>
                    <th>Data ostatniej aktualizacji</th>
                    <th>Opinia</th>
                    <th>Komentarz</th>
                </tr>
            </thead>
            <tbody class="tbody">
                    @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->user->name}}</td>
                        <td>{{$comment->updated_at}}</td>
                        <td>{{$comment->message}}
                        <br /> 
                        
                        @if($comment->user_id == \Auth::user()->id)
                                <a href="{{ route('edit', $comment) }}" 
                                class="btn btn-success btn-xs" title="Edytuj"> Edytuj </a>
                                <a href="{{ route('delete', $comment->id) }}"
                                class="btn btn-danger btn-xs"
                                onclick="return confirm('Jesteś pewien?')"
                               title="Skasuj"> Usuń
                                </a>
                                @endif
                        
                        </td>
                    </tr>
                    @endforeach
             </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('create') }}" class="btn btn-secondary ">Dodaj</a>
        </div>
        <br>       
        @endauth
    </div>     
  
    @guest
    <div class="table-container">
        <b>Zaloguj się aby przejrzeć komentarze.</b>
    </div>    
    @endguest       
</body>
</html>
