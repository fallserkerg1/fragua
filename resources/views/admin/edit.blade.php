@extends('admin.app')

@section('content')

<div class="container-fluid">
    <div class="container">
            <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Register</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update', $gun) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ $gun->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Class</label>
                    <input type="text" name="class" class="form-control" value="{{ $gun->class }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Factory</label>
                    <input type="text" name="factory" class="form-control" value="{{ $gun->factory }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" rows="5" class="form-control">{{ $gun->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ $gun->price }}">
                </div>
                <button type="submit" class="btn btn-success" style="float: left">Update</button>
              </form>
                <a href="{{ route('admin.table') }}" class="btn btn-secondary" style="float: right">Back</a>
        </div>
    </div>
    </div>
</div>

@endsection

