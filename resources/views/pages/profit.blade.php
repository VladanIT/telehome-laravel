@extends('layouts.index')

@section('title')
    Zarada
@endsection

@section('content')
<div class="content-label">
    <h1>Zarada za trenutni mesec</h1>

    <table class="content-of-users">
        <tr>
            <th></th>
            <th>GPON montaze (2)</th>
            <th>GPON montaze (1)</th>
            <th>Dorade (1)</th>
            <th>Dorade (2)</th>
            <th>HFC montaze (2)</th>
            <th>HFC montaze (1)</th>
            <th>GPON montaze stan (1)</th>
            <th>GPON montaze stan (2)</th>
        </tr>
        <tr>
            <th>Broj intervencija</th>
            @for($type = 1; $type <= 8; $type++)
                @include('components.profit.sum', ['type' => $type])
            @endfor
        </tr>
    </table>
</div>
@endsection
