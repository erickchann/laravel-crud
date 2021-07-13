@extends('layouts.main')

@section('show')
    <div class="container mt-5">
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Please Fill All Field Correctly!
                </div>
            @endif
            
            <form class="col s12" method="post" action="/student/{{ $students->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    <div class="input-field col s6">
                        <input id="name" type="text" name="name" class="validate" value="{{ $students->name }}">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nis" type="number" name="nis" class="validate" value="{{ $students->nis }}">
                        <label for="nis">NIS</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="grade" type="text" name="grade" class="validate" value="{{ $students->grade }}">
                        <label for="grade">Grade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" value="{{ $students->email }}">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="image" value="{{ $students->image }}">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Photo">
                        </div>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </form>
        </div>
    </div>
@endsection