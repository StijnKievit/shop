<div class="field">
    <label for="select_{{$field_id}}" class="label">{{$label}}</label>
    <div class="control">
        <div class="select">
            <select name="{{$name}}" id="select_{{$field_id}}">
                <option value="">Geen selectie</option>
                @foreach($selectOptions as $selectOption)
                    @if(is_object($selectOption))
                        <option value="{{$selectOption->id}}">{{$selectOption->name}}</option>
                    @else
                        <option value="{{$selectOption['value']}}">{{$selectOption['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>
