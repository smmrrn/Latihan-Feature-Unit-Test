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
                <li class="breadcrumb-item active">Videos</li>
                <li class="breadcrumb-item active">Articles</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Statistic</th>
                    <th>Publish</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <div class="card-header">
                    <div class="d-flex justify-content-between">            
                </div>  
                </div>
                @foreach ($video as $video)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->statistic }}</td>
                    <td>{{ $project->publish }}</td>
                    
                    <td><a name="" id="" class="btn btn-warning" href="{{ route('project.edit', $project) }}" role="button"><i class="bi bi-pencil-fill"></i></a></td>
                    
                </tr>    
                @endforeach
                
            </tbody>
        </table>
    </section>
@endsection
