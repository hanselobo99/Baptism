<label for="{{$name}}" class="form-label">{{$slot}}</label>
<input class="form-control" name={{$name}} type="{{$type}}" id="{{$name}}" value="{{old($name)}}">
@error($name)
<div class="alert alert-danger">{{ $message }}</div>
@enderror
