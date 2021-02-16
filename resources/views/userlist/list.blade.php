@extends('layouts.app')

@section('content')
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                @foreach ($users as $i)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <h3><span>{{$i->name}}</span>
                                <span>{{$i->email}} </span></h3>
                            <a href="/admin/user/delete/{{$i->id}}" class="read-more"><span>Delete</span></a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </section>

@endsection
