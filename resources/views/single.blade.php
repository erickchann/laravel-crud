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
                    <div class="card-action">
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection