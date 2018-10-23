@extends('layouts.default')

@section('content')

    <div class="card mt-md-5 pl-3 pr-3">
        <div class="card-title mt-lg-5"><h1>Contact</h1>
            <p class="lead">Please use to contact the site owner.</p></div>

        <div class="card-body">

            <form method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for=name>Name</label>
                    <input name="name" class="form-control" id="name" placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection