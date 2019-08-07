@extends('layouts.app')

@section('content')
  <div class="container">
    
    <div class="row">
        <div class="col-md-4" >
            <div class="card" style="height: 500px">
                <div class="card-body">
                    <h2>{{$user->name}}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card" style="min-height: 500px">
                <div class="card-body">
                    <ul>
                        {{dd($podcasts)}}
                        {{-- @foreach ($podcasts as $podcast)
                        <li>
                                1.Episode: Yaw how's you doing
                            </li>
                                
                        @endforeach
                         --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
        

  </div>
@endsection