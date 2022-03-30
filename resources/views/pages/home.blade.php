@extends('layouts.index')


@section('title')
    Telehome Group Home
@endsection

@section('content')
<div id="filter">
    <div class="btnContainer">
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnSearchById" name="btnSearchById" class="btn btn-primary" value="Pretraga po sifri korisnika"/>
        </div>
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnInsertCostumer" name="btnInsertCostumer" class="btn btn-primary" value="Unesi novog potrosaca"/>
        </div>
        <div class="form-group btnButtons col-lg-3 col-xs-12 col-xl-3">
            <input type="button" id="btnInsertIntervention" name="btnInsertIntervention" class="btn btn-primary" value="Unesi intervenciju"/>
        </div>
    </div>

    {{-- @yield('filter_form') --}}
    <div class="filter_form hidden" id="filter_form">
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="idConsumer" name="idConsumer" class="form-control" placeholder="Sifra korisnika"/>
        </div>
        <div class="form-group">
            <input type="button" id="btnSearch" name="btnSearch" class="btn btn-primary" value="Trazi"/>
        </div>
    </div>

    {{-- @yield('insert_form') --}}
    <div class="insert_form hidden" id="insert_form">
        <form action="{{ route('insert') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="consumerId" name="consumerId" class="form-control" placeholder="Sifra korisnika"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Ime korisnika"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Prezime korisnika"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="address" name="address" class="form-control" placeholder="Adresa korisnika"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="place" name="place" class="form-control" placeholder="Mesto"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="packet" name="packet" class="form-control" placeholder="Paket"/>
            </div>
            <div class="form-group">
                <input type="submit" id="btnInsert" name="btnInsert" class="btn btn-primary" value="Dodaj"/>
            </div>
        </form>
    </div>

    {{-- @yield('intervention_form') --}}
    <div class="insert_intervention_form hidden" id="insert_intervention_form">
        <form action="{{ route('intervention.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="text" id="consumerIdIntervention" name="consumerIdIntervention" class="form-control" placeholder="Sifra korisnika"/>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <textarea id="descriptionIntervention" name="descriptionIntervention" class="form-control" placeholder="Opis"></textarea>
            </div>
            <div class="form-group col-lg-3 col-xs-12 col-xl-3">
                <input type="date" id="dateIntervention" name="dateIntervention" class="form-control" placeholder="Datum"/>
            </div>
            <div class="form-group">
                <input type="submit" id="btnInterventionInsert" name="btnInterventionInsert" class="btn btn-primary" value="Dodaj"/>
            </div>
        </form>
    </div>

</div>
<div id="content">

    <div class="content-label">
        <h1>Tabela korisnika</h1>
    </div>
    <div class="sort">
        <select class="form-control" name="sortConsumers" id="sortConsumers">
            <option value="" disabled selected>Odaberi mesec</option>
            <option value="1">Januar</option>
            <option value="2">Februar</option>
            <option value="3">Mart</option>
            <option value="4">April</option>
            <option value="5">Maj</option>
            <option value="6">Jun</option>
            <option value="7">Jul</option>
            <option value="8">Avgust</option>
            <option value="9">Septembar</option>
            <option value="10">Oktobar</option>
            <option value="11">Novembar</option>
            <option value="12">Decembar</option>
        </select>
    </div>

    <div id="content-of-consumers">
        <table class="content-of-users" id="pagination_data">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Sifra</th>
                <th>Adresa</th>
                <th>Mesto</th>
                <th>Info</th>
            </tr>
            @isset($consumers)
                @foreach ($consumers as $consumer)
                    <tr>
                        <td>{{ $consumer->first_name }}</td>
                        <td>{{ $consumer->last_name }}</td>
                        <td>{{ $consumer->consumerId }}</td>
                        <td>{{ $consumer->address }}</td>
                        <td>{{ $consumer->place }}</td>
                        <td><a href="{{ route('consumer', ['id' => $consumer->consumerId]) }}">Info</a></td>
                    </tr>
                @endforeach
            @endisset
        </table>
    </div>
    {{--
        comments in blade file
    --}}
    {{--
    <div id="calculations">
        <label>Ukupan broj intervencija: <?= $num_interventions ?></label>
        <label>Ukupna zarada: <?= $num_interventions * 200 ?> dinara</label>
        <label>Ukupan broj intervencija za tekuci mesec: <?= $num_interventions_date ?></label>
        <label>Ukupna zarada za tekuci mesec: <?= $num_interventions_date * 200 ?> dinara</label>
    </div> --}}
</div>

@endsection
