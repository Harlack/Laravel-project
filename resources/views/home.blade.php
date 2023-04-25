@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Udało ci się zalogować') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    -<a class="navbar-brand" href="{{ url('/') }}"> Przejdź do strony głównej</a>
                    <br/>
                    -<a class="navbar-brand" href="{{ route('comments') }}"> Przejdź do opinii</a>
                    <br/>
                    -<a class="navbar-brand" href="{{ route('trees') }}"> Przejdź do drzew</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
