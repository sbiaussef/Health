
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prendre le Rendez-vous</div>

                    <div class="panel-body">
                        <form action="/addrv" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" class="form-control" value="{{Auth::user()->id}}" name="id"><br>
                            <input type="hidden" class="form-control" value="{{Auth::user()->email}}" name="mail" readonly><br>
                            <input  type="date" class="form-control" name="dt" ><br>
                            <input  type="time" class="form-control" name="tm" ><br>
                            <textarea name="remarque" class="form-control" placeholder="TAPEZ VOTRE REMARQUE" rows="10"></textarea><br>
                            <input type="submit" class="btn btn-primary" value="accept">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
