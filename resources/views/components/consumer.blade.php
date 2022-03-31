<tr>
    <td>{{ $consumer->first_name }}</td>
    <td>{{ $consumer->last_name }}</td>
    <td>{{ $consumer->consumerId }}</td>
    <td>{{ $consumer->address }}</td>
    <td>{{ $consumer->place }}</td>
    <td><a href="{{ route('consumer', ['id' => $consumer->consumerId]) }}">Info</a></td>
</tr>
