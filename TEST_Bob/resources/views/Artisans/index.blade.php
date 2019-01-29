@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Stock Name</td>
          <td>Stock Price</td>
          <td>Stock Quantity</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($artisans as $artisan)
        <tr>
            <td>{{$artisan->id}}</td>
            <td>{{$artisan->name}}</td>
            <td>{{$artisan->departement}}</td>
            <td>{{$artisan->email}}</td>
            <td>{{$artisan->id_metier}}</td>
            <td><a href="{{ url('editurl'), ['id'=>$artisan->id] }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('Artisans.destroy', $artisan->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection