@extends('layouts.app')

@section('content')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img id='base64image' src='data:image/jpeg;base64,{{$article->image}}' alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            {{$article->title}}
                        </h2>

                        <div class="entry-content">
                            <p>
                                {{$article->description}}
                            </p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">{{$article->categoryName->name}}</a></li>
                            </ul>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
