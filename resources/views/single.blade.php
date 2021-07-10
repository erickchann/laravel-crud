@extends('layouts.main')

@section('show')
    <div class="container mt-5">
        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?= $students->name ?></span>
                    <p><?= $students->grade ?></p>
                    <p><?= $students->email ?></p>
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