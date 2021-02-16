@extends('layouts.app')

@section('content')

    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{$category_name ?? 'Articles'}} Article</h2>
                <p>Collection of the {{$category_name ?? 'user'}}'s article</p>
            </header>

            <div class="row gy-4">
                @for($x=0;$x<count($articles);$x++)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        @if($x%3==0)
                            <div class="service-box blue">
                        @endif
                        @if($x%3==1)
                            <div class="service-box orange">
                        @endif
                        @if($x%3==2)
                            <div class="service-box green">
                        @endif
                            <img style='display:block; width:300px;height:300px;' id='base64image'
                                 src='data:image/jpeg;base64,{{$articles[$x]->image}}' />
                            <h3><a href="/article/detail/{{$articles[$x]->id}}">  {{$articles[$x]->title}}</a></h3>
                            <p>{{$articles[$x]->description}}</p>
                            <a href="#" class="read-more"><span>Category : {{$articles[$x]->categoryName->name}}</span></a>
                        </div>
                    </div>
                @endfor

            </div>

        </div>

    </section>
@endsection
