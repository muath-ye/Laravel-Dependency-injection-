{{--@extends('layouts.app')--}}
@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h1>Hay! Welcome</h1>
            </div>
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4>
                        You are using my simple code for:
                    </h4>

                    <p>
                        <i>core concepts: </i> <b>Service Container</b> and <b>Auto-Resolution</b>,
                    </p>
                    <p>
                        <i>Model relationship: </i> <b>Morph Many to Many</b>,
                    </p>
                    <p>
                        <i>Database: </i> <b>Migration</b>, <b>Factory</b> and <b>Seeder</b>
                    </p>
                    <p>
                        <i>Blade: </i> <b>Master Layout</b>, <b>Extended Layout</b> and <b>Included Layout</b>.
                    </p>
                </div>
                @guest
                <div class="card-body">
                    <h4>Use these credentials to login:</h4>
                    <p>E-mail Address: <i><u>muath.ye@gmail.com</u></i></p>
                    <p>Password: <i>password</i></p>
                </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
