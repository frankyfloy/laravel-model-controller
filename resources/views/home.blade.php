@extends('layouts.app')

@section('comics')
    <main id="home">
        <div class="container-main">

            <section id="cardSection">
                <h1>{{$prova}}</h1>
                <div class="currSeries">
                    Movies
                </div>

                <?php // TODO: Usarlo per movies ?>
                {{-- <ol id="consoleCard">
                    @foreach ($articles as $i => $article)
                        <li class="card">
                            <a href="{{route('details',['id' => $i])}}">
                                <img class="card-img" src="{{$article['thumb']}}" alt="">
                                <div class="card-body">
                                    <p>{{$article['series']}}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ol> --}}

                {{-- <a class="load-more btn" type="button" name="button">LOAD MORE</a> --}}
            </section>
        </div>
    </main>
@endsection
