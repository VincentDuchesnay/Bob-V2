@extends('Artisans.layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Artisan
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ url('posts') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Share Nom:</label>
              <input type="text" class="form-control" name="artisan_nom"/>
          </div>
          <div class="form-group">
              <label for="price">Share id_metie:</label>
              <input type="text" class="form-control" name="id_metier"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share Departement:</label>
              <input type="text" class="form-control" name="departement"/>
          </div>
          <div class="form-group">
              <label for="quantity">Share Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection