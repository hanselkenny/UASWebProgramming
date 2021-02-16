@extends('layouts.app')

@section('content')
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>{{$category_name ?? 'Articles'}} Article</h2>
                <p>Collection of the {{$category_name ?? 'user'}}'s article</p>
            </header>

            <div class="row gy-4">
                @foreach ($articles as $i)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                                                <h3><a>  {{$i->title}}</a></h3>
                                                <a href="/user/article/delete/{{$i->id}}" class="read-more"><span>Delete</span></a>
                                            </div>
                                    </div>
                @endforeach

                            </div>

                    </div>

    </section>
@endsection
