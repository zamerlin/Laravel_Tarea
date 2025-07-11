@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Entrada') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Te Logeaste!') }}
                    <a href="{{ route('tareas.index') }}" class="btn btn-primary">Ir a Tareas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
