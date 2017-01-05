@if($errors -> has('name'))
    <ul class="alert alert-danger" style="margin-top: 10px;">
        @foreach($errors -> get('name') as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif