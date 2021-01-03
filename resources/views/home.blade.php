@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
             <!-- <img src="">-->
             <!-- <span class="card-title">{{ __('Dashboard') }}</span>-->
            </div>
            <div class="card-content">
             
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
@endsection
