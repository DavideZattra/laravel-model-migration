@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section id="ms_travels" class="container">

        <div class="row">

            @foreach ($travels as $travel)
            
            <div class="col-5 ms_travel">
                <h1>{{ $travel->commercial_name }}</h1>
                <p>{{ $travel->description }}</p>
                <h5>Città di destinazione: <br>{{ $travel->city }}</h5>
                <p>Posti disponibili: {{ $travel->seats }}</p>
                <h5>Prezzo: {{ $travel->price }}&euro;</h5>
                <p>Periodo: {{ $travel->period }} </p>
            </div>    
                
            @endforeach

        </div>
        
    </section>

@endsection
    