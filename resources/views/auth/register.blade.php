@extends('layouts.app')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@section('content')

    <div class="padding-all">
        <div class="header">
        </div>

        <div class="design-w3l">
            <div class="mail-form-agile">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" id="name"   class="padding" placeholder="Your Name..."  name="name" value="{{ old('name') }}" required autocomplete="name">
                    @error('name')
                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <input id="email" type="text"  class="padding"  placeholder="Your Email..."  name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input type="password"  id="password" name="password" class="padding" placeholder="Password" required=""/>
                    @error('password')
                    <span class="error" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                    @enderror
                    <input id="password" type="password" class="padding"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="">

                    <input type="text" id="gaming_id" class="padding"  placeholder="Enter Your Gaming Id" name="gaming_id" value="{{ old('gaming_id') }}" required autocomplete="gaming id" autofocus>
                    @error('gaming_id')
                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                <div>
                    <button type="submit">Submit</button>
                </div>


                </form>
            </div>
            <div class="clear"> </div>
        </div>
    </div>



@endsection


