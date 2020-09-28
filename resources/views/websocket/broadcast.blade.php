@extends('layouts.app')

@section('content')

<div class="content">
    <div class="m-b-md">
        New notification will be alerted realtime!
    </div>
</div>

@endsection

@section('scripting')

<script>
    Echo.private('user.{{ $user_id }}')
    .listen('NewMessageNotification', (e) => {
        alert(e.message.message)
    })
</script>

@endsection