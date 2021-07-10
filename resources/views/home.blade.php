@extends('layouts.main')

@section('show')

<div class="container mt-5">
    <h3 class="title">Data Siswa</h3>

    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $student->name ?>
                <a href="#!" class="collection-item"><span class="new badge">Details</span></a>
            </li>
        @endforeach
    </ul>
</div>

@endsection