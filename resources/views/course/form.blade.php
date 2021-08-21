<div class="row">
    <div class="col-6 offset-3">
        @if($errors)
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        <form method="POST" action="{{$route}}">
            @csrf
            <label for="name">{{__('Name')}}</label>
            <input type="text" name="name" class="form-control">
            <label for="description">{{__('Description')}}</label>
            <input type="text" name="description" class="form-control">
            <input type="submit" value="{{__('Save')}}" class="btn btn-outline-success mt-2">
        </form>
    </div>
</div>
