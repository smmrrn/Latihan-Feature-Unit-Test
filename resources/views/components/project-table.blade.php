<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Leader</th>
            <th>Owner</th>
            <th>Deadline</th>
            <th>Progress</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <div class="card-header">
            <div class="d-flex justify-content-between">            
        </div>  
        <div>
                 <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('project.create') }}" role="button"><i class="bi bi-plus-square"></i>       Add Project</a>
            </div>
        </div>
        @foreach ($projects as $project)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->leader->name }}</td>
            <td>{{ $project->owner }}</td>
            <td>{{ $project->deadline }}</td>
            <td>{{ $project->progress }}%</td>
            
            <td><a name="" id="" class="btn btn-info" href="{{ route('project.show', $project) }}" role="button"><i class="bi bi-eye-fill"></i></a></td>
            <td><a name="" id="" class="btn btn-warning" href="{{ route('project.edit', $project) }}" role="button"><i class="bi bi-pencil-fill"></i></a></td>
            <td>
                <form action="{{ route('project.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
        </tr>    
        @endforeach
        
    </tbody>
</table>