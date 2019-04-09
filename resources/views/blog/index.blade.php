@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach( $articles as $article)

                    <div class="media mb-4 border border-primary p-3">
                        <img class="mr-3" src="{{$article->image}}" alt="{{$article->title}}">
                        <div class="media-body">
                            <h5 class="mt-0">{{$article->title}}</h5>
                            {{$article->intro}}
                            <p><strong>Категория: {{$article->category->name}}</strong></p>
                        </div>
                    </div>


                    @endforeach
                {{$articles->links()}}
            </div>
        </div>
    </div>
@endsection
