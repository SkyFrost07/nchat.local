@extends('chat::layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4 chat-group-list">
        @if(!$groups->isEmpty())
        <ul>
            @foreach($groups as $gr)
            @if($gr->chat_type == 1 || $gr->chat_type == 3)
            <li>{{$gr->user->name}}</li>
            @endif
            @if($gr->chat_type == 2)
            <li>{{$gr->toFanpage->name}}</li>
            @endif
            @endforeach
        </ul>
        @endif
    </div>
    <div class="col-sm-8 chat-content">
        
    </div>
</div>
@stop

