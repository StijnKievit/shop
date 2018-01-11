<div class="field">
    <label class="label">{{$label}}</label>
    <div class="control">
        <input name="{{$name}}" class="input currency {{ isset($options['class']) ? $options['class'] : '' }}" type="number" min="0.00" max="10000.00" step="0.01" placeholder="{{isset($options['placeholder']) ? $options['placeholder'] : ''}}">
    </div>
</div>
