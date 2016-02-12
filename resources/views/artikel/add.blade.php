@extends('app')

@section('content')


<title>Create New Artikel</title>
<blockquote>
  <p style="font-size:35px;">New Artikel</p>
</blockquote>
 <div class="row">
    <form method="POST" action="{{ url('save_new_artikel') }}" class="col s12" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12">
          <input id="title" type="text" name="title" class="validate">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <label for="title">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="textarea1">Content</label> <br><br>
          <textarea class="form-control ckeditor" name="content" class="materialize-textarea" rows="6"></textarea>
        </div>
      </div>
      <div class="file-field input-field">
      <div class="btn" style="background-color:#165AA1;">
        <span><i class="fa fa-folder-open" ></i></span>
        <input type="file" name="pict" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="pict" type="text" placeholder="Upload one or more files">
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" style="margin-top:50px; margin-left:00px;float:right;background-color:#e65100">Submit
    <i class="material-icons right">send</i>
    </button>
  </form>


  @endsection
