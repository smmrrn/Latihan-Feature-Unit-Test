@extends('layouts.template.user')
@section('content')
    <div class="pagetitle">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <h1>Test</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Test</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <x-project-table :projects="$projects" />
    </section>
@endsection
