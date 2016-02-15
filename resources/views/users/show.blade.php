<ul>
    @foreach($user->tweets $tweet)
        <li>{{$tweet->body}}</li>
    @endforeach
</ul>