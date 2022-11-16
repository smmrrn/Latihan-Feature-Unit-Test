@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                    <p class="mb-0">
                        <br>
                        <b><h4> {{ $title ?? 'Add Project' }} </h4></b>
                    </p>
                   
                </div>   
                <div>
                         <a name="" id="" class="btn btn-primary btn-sm" href="{{ route('project.index') }}" role="button"><i class="fa fa-arrow-left"></i></a>
                    </div>
                </div>
  <div class="card-body">
            <form action="{{ route('project.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Project Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Input your Project Name.." aria-describedby="helpid">
                </div>
                <div class="form-group mb-3">
                    <label for="">Leader ID</label>
                    <input type="integer" name="leader_id" value="1" id="" class="form-control" placeholder="" aria-describedby="helpid">
                </div>
                <div class="form-group mb-3">
                    <label for="">Project Owner</label>
                    <input type="text" name="owner" id="" class="form-control" placeholder="Input your Project Owner.." aria-describedby="helpid">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deadline</label>
                    <input type="date" name="deadline" id="" class="form-control" placeholder="" aria-describedby="helpid">
                </div>
                <div class="form-group mb-3">
                    <label for="">Progress (%)</label>
                    <input type="integer" name="progress" min="0" max="100" id="" class="form-control" placeholder="Input your Progress.." aria-describedby="helpid">
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label><br>
                    <textarea name="description" id="" cols="84" rows="5" placeholder="  Input your Description.."></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>

            </div>
        </div>
    </div>

      

    </div>

</div>
@endsection