<div class="field is-grouped">
    @foreach($buttons as $button)
        <div class="control">
            <button class="button {{isset($button['options']['class']) ? $button['options']['class'] : ''}}" type="{{$button['type']}}" value="{{$button['value']}}" >{{$button['label']}}</button>
        </div>
    @endforeach
</div>