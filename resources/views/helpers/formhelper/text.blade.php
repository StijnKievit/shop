<div class="field">
    <label class="label">{{$label}}</label>
    <div class="control">
        <input name="{{$name}}" class="input {{ isset($options['class']) ? $options['class'] : '' }}" type="text" placeholder="{{isset($options['placeholder']) ? $options['placeholder'] : ''}}">
    </div>
</div>