@extends('layouts.main')

@section('main-section')
    <div class="container">
        <form action="{{ url('/') }}/registration" method="POST">
            @csrf
            <h1 class="text-center">Registration Form</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}" />
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" value="{{ old('email') }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="confirm_password" id="" class="form-control" />
                <span class="text-danger">
                    @error('confirm_password')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
