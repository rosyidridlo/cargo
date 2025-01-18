@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Armadas</h6>
          <a href="armadas/create" class="btn btn-primary float-end">Add</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Max Weight</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dimension</th>
                  <th class="text-secondary opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($armadas as $armada)
                <tr>
                    <td>
                      @if($armada->pictures->isNotEmpty())
                          <img src="uploads/{{$armada->pictures->last()->filename}}" width="150" class="img-thumbnail" alt="">
                      @endif
                      {{ $armada->name }}
                    </td>
                    <td>{{ $armada->max_weight }}</td>
                    <td> P {{ $armada->length }}m x L {{ $armada->width }}m x T {{ $armada->height }}m</td>
                    <td>
                        <a href="/armadas/{{ $armada->id }}/edit" class="btn btn-primary ">Edit</a>
                        <form action="/armadas/{{ $armada->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
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