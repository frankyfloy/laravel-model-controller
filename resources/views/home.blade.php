@extends('layouts.app')

@section('home')
    <main id="home">
        <div class="container-main">

            <section id="cardSection">
                <div class="currSeries">
                    MOVIES
                </div>

                <ol id="consoleCard">
                    @foreach ($movies as $i => $movie)
                        <li class="card">
                            <a>
                                <img class="card-img" src="" alt="">
                                <div class="card-body">
                                    <p class="card-title">Title : <span class="content-desc">{{$movie['title']}}</p>
                                    <p>Original Title : <span class="content-desc">{{$movie['original_title']}}</span></p>
                                    <p>lang : <span class="content-desc">{{$movie['nationality']}}</span></p>
                                    <p>Date : <span class="content-desc">{{$movie['date']}}</span></p>
                                    <p>Vote : <span class="content-desc">{{$movie['vote']}}</span></p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ol>

                <a class="load-more btn" type="button" name="button">LOAD MORE</a>
            </section>
        </div>
    </main>
@endsection
