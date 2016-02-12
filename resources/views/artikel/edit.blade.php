@extends('app')

@section('content')

<title>Edit Artikel</title>
<blockquote>
  <p style="font-size:35px;">Edit Artikel</p>
</blockquote>
 <div class="row">
    <form method="POST" action="{{ url('update_artikel') }}" class="col s12" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" value="{{ $data->title }}" class="validate">
          <input type="hidden" name="id" value="{{ $data->id }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label for="title">Title</label><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <label for="textarea1">Content</label><br>
          <textarea class="form-control ckeditor" name="content" class="materialize-textarea" rows="6">{{ $data->content }}</textarea>
          <label for="textarea1">Content</label>
        </div>
      </div>
      <div class="file-field input-field">
      <div class="btn" style="background-color:#165AA1;">
        <span><i class="fa fa-folder-open" ></i></span>
        <input type="file" name="pict" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="pict" type="text" value="{{ $data->pict }}">
      </div>
      </div>
      <div  class="image-container bordered">
      <div class="frame"><img style="height:330px;width:550px;" src="{{ url('images/'.$data->pict) }}">

    </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" style="margin-top:50px; margin-left:00px;float:right;background-color:#e65100"">Submit
    <i class="material-icons right">send</i>
    </button>
  </form>
  </div>


  @endsection
