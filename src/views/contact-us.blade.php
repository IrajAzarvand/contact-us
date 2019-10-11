@extends('ContactUs::contact-usNav')
@section('pageTitle', 'تماس با ما')

@section('content')
    <section>
        @foreach($ContactUs as $data)
            <h2>{{$data->title}}</h2>
            {{$data->body}}
        @endforeach
    </section>
@endsection
