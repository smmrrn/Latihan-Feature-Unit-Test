@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                    <p class="mb-0">
                        <br>
                    <b><h4> {{ $title }} </h4></b>
                    </p>
                    
                </div>  
                <div>
                         <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('project.create') }}" role="button"><i class="fa fa-plus"></i>      Add</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Task</th>
                                <th class="col-md-2">Leader</th>
                                <th class="col-md-2">Project Owner</th>
                                <th class="col-md-2">Deadline</th>
                                <th class="col-md-2">Progress</th>
                                <th class="col-md-3">Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->tasks_count }}</td>
                                <td>{{ $project->leader->name }}</td>
                                <td>{{ $project->owner }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td>{{ $project->progress }}%</td>
                                <td>{{ $project->description }}</td>
                                
                                <td><a name="" id="" class="btn btn-info" href="{{ route('project.show', $project) }}" role="button"><i class="fa fa-eye"></i></a></td>
                                <td><a name="" id="" class="btn btn-warning" href="{{ route('project.edit', $project) }}" role="button"><i class="fa fa-pen"></i></a></td>
                                <td>  
                                    <form action="{{ route('project.destroy', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>    
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
