@if($errors -> has('title'))
    <ul class="alert alert-danger" style="margin-top: 10px;">
        @foreach($errors -> get('title') as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif