@extends('layouts.index')

@section('title')
    @isset($consumer)
        {{ $consumer->first_name , $consumer->last_name }}
    @endisset
@endsection

@section('content')
<div class="content-label">
    <h1>Informacije o potrosacu</h1>
</div>

<div class="consumer-content">
    <div class="col-lg-4 consumer-form">
            <div class="col-lg-12 form-update">
                <label>Ime</label>
                <input type="text" id="first-name" name="first-name" class="form-control update-consumer" value="{{ $consumer->first_name }}"/>
            </div>
            <div class="col-lg-12 form-update">
                <label>Prezime</label>
                <input type="text" id="last-name" name="last-name" class="form-control update-consumer" value="{{ $consumer->last_name }}"/>
            </div>
            <div class="col-lg-12 form-update">
                <label>Mesto</label>
                <input type="text" id="place" name="place" class="form-control update-consumer" value="{{ $consumer->place }}"/>
            </div>
            <div class="col-lg-12 form-update">
                <label>Adresa</label>
                <input type="text" id="address" name="address" class="form-control update-consumer" value="{{ $consumer->address }}"/>
            </div>

            <div class="col-lg-12 form-update hidden">
                <label>ID</label>
                <input type="text" id="consumerID" name="consumerID" class="form-control update-consumer" value="{{ $consumer->consumerId }}"/>
            </div>

        <div class="form-update">
            <input type="button" id="consumerUpdate" name="consumerUpdate" class="btn btn-success" value="Promeni"/>
        </div>
        <div class="form-update">
            <input type="button" id="consumerDelete" name="consumerDelete" class="btn btn-danger" value="Izbrisi"/>
        </div>
        <div id="dialog" class="alert-danger">
            <p>Da li ste sigurni da zelite da obrisete potrosaca?</p>
            <a href="{{ route('consumer.delete', ['id' => $consumer->consumerId]) }}"><input type="button" id="consumerDeleteFinaly" name="consumerDeleteFinaly" class="btn btn-outline-danger" value="Da"/></a>
            <input type="button" id="consumerDeleteQuit" name="consumerDeleteQuit" class="btn btn-outline-primary" value="Ne"/>
        </div>
    </div>
    {{--
        comments
    --}}
    <div class="col-lg-8 consumer-history">
        <table class="col-lg-11 content-interventions">
            <tr>
                <th>Datum</th>
                <th>Opis</th>
                <th>Tip intervencije</th>
            </tr>
            @if($intervention->count())
                @foreach($intervention as $i)
                    @include('components.info.interventions', ['i' => $i])
                @endforeach
            @else
                <tr>
                    <td colspan="3">Ne postoji ni jedna intervencija za ovog korisnika.</td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection
