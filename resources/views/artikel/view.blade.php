@extends('app')

@section('content')


<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{ url('images/'.$data->pict) }}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{ $data->title }}<i class="material-icons right">more_vert</i></span>
      @if (Auth::guest())
      
      @else
      <p><a href="{{ url('edit_artikel/'.$data->id) }}">Edit</a></p>
      <p><a href="{{ url('delete_artikel/'.$data->id) }}" onclick="return confirm('Are you sure want to delete it?')">Delete</a></p>
      @endif
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{ $data->title }}<i class="material-icons right">close</i></span>
      <p>{!! $data->content !!}</p>
    </div>
  </div>


@endsection

