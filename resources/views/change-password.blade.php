@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change password') }}</div>
                <form action="{{ route('update-password') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        
                            <div class = "mb-3">
                                <label for="oldPasswordInput" class = "form-label">Vpišite vaše geslo.</label>
                                <input name ="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="Vpišite geslo">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class = "mb-3">
                                <label for="newPasswordInput" class = "form-label">Vpišite novo geslo.</label>
                                <input name ="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput" placeholder="Vpišite novo geslo">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>
                            <div class = "mb-3">
                                <label for="confirmPasswordInput" class = "form-label">Potrdite novo geslo.</label>
                                <input name ="new_password_confirmation" type="password" class="form-control" id="confirmPasswordInput" placeholder="Potrdite novo geslo">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
