@extends('layouts.app')

@section('contend')
<div class="container">
    <div class="row justify-contend-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">เกี่ยวกับเรา</div>

                <div class="card-body">
                    <h3>{{ $fullname }}</h3>
                    <p>{{ $website }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    