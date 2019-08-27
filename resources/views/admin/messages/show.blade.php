@extends("admin.app")
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $message->title }} ({{ $message->user->id }} - {{ $message->created_at }}) }}</div>

                    <div class="card-body">
                        {{ $message->message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
