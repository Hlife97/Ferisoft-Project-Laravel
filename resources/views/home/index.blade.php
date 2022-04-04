@extends('layouts.layoutHome')
@section('title')
Anasayfa
@endsection

@section('content')

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3">
                    This is title
                </h1>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, eaque.
                </p>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda sunt, 
                    atque sequi, impedit, rem cumque sapiente minus fugit tempora recusandae illum! Fugiat 
                    similique itaque sint incidunt esse, placeat at quisquam voluptatibus veritatis minima 
                    fugit dolorum dolore odit veniam iure ratione aspernatur corporis nobis molestiae? Placeat 
                    similique aperiam voluptas vero eos voluptatem fuga esse accusamus iure!
                </p>
            </div>
            <div class="col-md-6">
                <img src="https://media.istockphoto.com/photos/istanbul-the-capital-of-turkey-picture-id507551802?b=1&k=20&m=507551802&s=170667a&w=0&h=kpYl1YzBS8s9roRG18hQVJ0I3vumxW5I659uKgeYNsI=" class="img-fluid img-thumbnail" alt="">
            </div>
        </div>
    </div>
</section>

@endsection