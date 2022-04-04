@extends('layouts.layoutAdmin')
@section('title')
Mesajlar
@endsection

@section('content')

<section class="my-4">
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($messages as $key => $message)
                    <tr>
                    <th scope="row">{{ $key +1 }}</th>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a href="{{ route('admin.message-destroy', ['contact'=>$message->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>      
                @endforeach
              
            </tbody>
          </table>
    </div>
</section>

@endsection