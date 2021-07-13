@extends('layouts.main')

@section('show')
    <div class="container mt-5">
        <div class="row">
            <div class="col s5 m7">
                <div class="card" style="max-width: 300px;">
                    <div class="card-image">
                        <img src="{{ $students->image }}">
                        <span class="card-title"><b>{{ $students->name }}</b></span>
                    </div>
                    <div class="card-content">
                        <p>{{ $students->grade }}</p>
                        <p>{{ $students->email }}</p>
                    </div>
                    <div class="card-action d-flex justify-content-around">
                        <form method="post" action="/student/{{ $students->id }}">
                            @csrf
                            @method('delete')
                            
                            <button type="submit" class="waves-effect waves-light btn">Delete</button>
                        </form>

                        <a href="/student/{{ $students->id }}/edit" class="waves-effect waves-yellow btn">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection