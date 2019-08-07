@extends('../layouts.app')

@section('content')
  <div class="container">
    <div class="row">
            <h3>Hello this is the show podcasts page of user</h3>
    </div>
    
    {{ $podcast->title  }}

  </div>
@endsection