@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto p-2">List Shortener URL</div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Shortener URL</th>
                            <th scope="col">Expiration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($urls as $url)
                            <tr>
                                <th scope="row">{{ $url->id }}</th>
                                <td>{{ $url->shortener_url }}</td>
                                <td>{{ date('d/m/Y', strtotime($url->expiration_date)) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $urls->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
