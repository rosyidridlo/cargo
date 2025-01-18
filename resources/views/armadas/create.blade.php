@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Add Armada</h6>
        </div>
        <div class="card-body px-2 pt-0 pb-2">
          @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
          @endif
            <form action="/armadas" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Armada">
                </div>
                <div class="form-group">
                    <label for="email">Max Weight</label>
                    <input name="max_weight" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Max Weight">
                  </div>
                  <div class="form-group">
                    <label for="length">Length</label>
                    <input name="length" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Length">
                  </div>
                  <div class="form-group">
                    <label for="width">Width</label>
                    <input name="width" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Width">
                  </div>
                  <div class="form-group">
                    <label for="height">Height</label>
                    <input name="height" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Height">
                  </div>
                  <div class="form-group">
                    <label for="height">Pictures</label>
                    <input name="files[]" type="file" class="form-control" multiple id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Height">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
    </div>
</div>
@endsection