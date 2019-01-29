@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Artisan
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
      <form method="post" action="{{ route('Artisans.update', $artisan->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Artisan Name:</label>
          <input type="text" class="form-control" name="name" value={{ $artisan->name }} />
        </div>
        <div class="form-group">
          <label for="price">Artisan departement :</label>
          <input type="text" class="form-control" name="departement" value={{ $artisan->departement }} />
        </div>
        <div class="form-group">
          <label for="quantity">Artisan email:</label>
          <input type="text" class="form-control" name="email" value={{ $artisan->email }} />
        </div>
        <div class="form-group">
          <label for="quantity">Artisan id_metier:</label>
          <input type="text" class="form-control" name="id_metier" value={{ $artisan->id_metier }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection