@extends('layouts.layoutHome')
@section('title')
İletişim
@endsection

@section('content')

<section class="my-5">
    <div class="container">
        <form method="POST" action=""{{ route('contact-store') }}>
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fName">Full Name</label>
                        <input name="name" type="text" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

@endsection