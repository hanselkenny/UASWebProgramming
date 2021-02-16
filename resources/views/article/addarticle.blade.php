@extends('layouts.app')

@section('content')
    <section id="services" class="services" style="margin-top: 150px">

        <div class="container" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Blog</div>

                    <div class="card-body">
                        <form enctype="multipart/form-data" action="/article/saveadd"  method="post">
                            {{ csrf_field() }}

                            Title <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"> <br/>
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            Category <select class="form-control" id="selectUser" name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" focus>
                                <option value="" disabled selected>Please select category</option>
                                @foreach($category_list as $i)
                                    <option value="{{$i->id}}">{{ $i->name }}</option>
                                @endforeach
                            </select><br/>
                            @if ($errors->has('category_id'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            Image <input type="file" name="image" class="btn btn-primary" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"> <br/>
                               @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            Story <textarea type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"> </textarea><br/>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <input type="submit" value="Save" class="btn btn-primary">
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
        </div>
    </section>
@endsection
