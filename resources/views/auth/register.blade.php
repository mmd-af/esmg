@extends('site.layouts.index')
@section('content')
    <div class="container">
        <form class="form-control" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">نام:</label>
                <input id="name" class="form-control" type="text" name="name" value="{{old('name')}}" required
                       autofocus/>
            </div>
            <div class="mt-4">
                <label for="email">ایمیل:</label>
                <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required/>
            </div>
            <div class="mt-4">
                <label for="password">رمزورود:</label>
                <input id="password" class="form-control"
                       type="password"
                       name="password"
                       required autocomplete="new-password"/>
            </div>
            <div class="mt-4">
                <label for="password_confirmation">تکرار رمز:</label>
                <input id="password_confirmation" class="form-control"
                       type="password"
                       name="password_confirmation" required/>
            </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn btn-outline-success">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection
