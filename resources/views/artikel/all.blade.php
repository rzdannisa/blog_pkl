@extends('app')

@section('content')

        <title>All Artikel</title>
        <blockquote>
          <p style="font-size:35px;">All Artikel</p>
        </blockquote>
          @foreach($data as $artikel)
            <div class="row">
        <div class="col s12 m7">
          <div class="card">

            <div class="card-image">

              <img style="height:200px; weight:80px !important;"  src="{{ url('images/'.$artikel->pict) }}">
              <span class="card-title">{{ $artikel->title }}</span>
            </div>
            <div class="card-content" style="text-align:justify;">
            <?php
            $string = strip_tags($artikel->content);

            if (strlen($string) > 500) {

                // truncate string
                $stringCut = substr($string, 0, 500);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
            }
            echo $string;
            ?>
            @if (Auth::guest())
            <td><a href="{{ url('view_artikel_/'.$artikel->id) }}">Read more</a></td>
            {{ App\User::find($artikel->id_user)['name'] }}
            <i class="material-icons right">perm_contact_calendar</i>

            {{ date_format(date_create($artikel->created_at),"D, d M Y H:i:s") }}
            @else
            <td><a href="{{ url('view_artikel/'.$artikel->id) }}" style="color:#1565c0">Read more</a></td>
            </div>
            <div class="card-action">
            <td><a href="{{ url('edit_artikel/'.$artikel->id) }}">Edit</a></td>
            <td><a href="{{ url('delete_artikel/'.$artikel->id) }}" onclick="return confirm('Are you sure want to delete it?')">Delete</a></td><br><br>
            {{ App\User::find($artikel->id_user)['name'] }}
            <i class="material-icons right">perm_contact_calendar</i>

            ( {{ date_format(date_create($artikel->created_at),"D, d M Y H:i:s") }} )
            @endif
            </div>

          </div>
        </div>
      </div>
      @endforeach



@endsection
