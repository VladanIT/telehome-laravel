<td>
    @php
        $br = 0;
    @endphp
    @foreach($intervention as $i)
        @if($i->type_id == $type)
            @php
                $br++;
            @endphp
        @endif
    @endforeach
    {{ $br }}
</td>
