@extends('app') @section('content')

<div class="container">

    @include('flash::message')

    <div class="row">
        <h1 class="pull-left">Clients</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('clients.create') !!}">Add New</a>
    </div>

    <div class="row">
        @if($clients->isEmpty())
        <div class="well text-center">No Clients found.</div>
        @else
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Contact Name</th>
                    <th>Contact Last Name</th>
                    <th>Email</th>
                    <th>Tels</th>
                    <th>Address</th>
                    <th width="50px">Action</th>
                </thead>
                <tbody>

                    @foreach($clients as $client)
                    <tr>
                        <td>{!! $client->name !!}</td>
                        <td>{!! $client->contact_name !!}</td>
                        <td>{!! $client->contact_last_name !!}</td>
                        <td>{!! $client->email !!}</td>
                        <td>{!! $client->tels !!}</td>
                        <td>{!! $client->address !!}</td>
                        <td>
                            <a href="{!! route('clients.edit', [$client->id]) !!}"><i class="fa fa-pencil-square-o"></i></a>
                            <a href="{!! route('clients.delete', [$client->id]) !!}" onclick="return confirm('Está seguro de eliminar éste registro - Client?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            @endif
        </div>
    </div>
    @endsection