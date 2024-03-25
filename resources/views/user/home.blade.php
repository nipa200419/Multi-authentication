@extends('layouts.userapp')
  
@section('content')
<section class="section">
<div class="container">
    <div class="section-body mt-2">
        <div class="card">
            <div class="card-body p-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">>
                        <div class="card-header">{{ __('Dashboard') }}</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are a User.
                        </div>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection