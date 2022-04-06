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

    @include('components.home.search_form')
    @include('components.home.consumer_form')
    @include('components.home.intervention_form')

</div>
<div id="content">

    <div class="content-label">
        <h1>Tabela korisnika</h1>
    </div>

    @include('components.home.sort')

    <div id="content-of-consumers">
        <table class="content-of-users">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Sifra</th>
                <th>Adresa</th>
                <th>Mesto</th>
                <th>Info</th>
            </tr>
            @if($consumers->count())
                @foreach ($consumers as $consumer)
                    @include('components.home.consumer', ['consumer' => $consumer])
                @endforeach
            @else
                <tr>
                    <td colspan="6">Nema korisnika.</td>
                </tr>
            @endif
        </table>
    </div>
    <a href="{{ route('profit') }}" class="profit"><input type="button" value="Profit" class="btn btn-dark"></a>
    {{--
    <div id="calculations">
        <label>Ukupan broj intervencija: <?= $num_interventions ?></label>
        <label>Ukupna zarada: <?= $num_interventions * 200 ?> dinara</label>
        <label>Ukupan broj intervencija za tekuci mesec: <?= $num_interventions_date ?></label>
        <label>Ukupna zarada za tekuci mesec: <?= $num_interventions_date * 200 ?> dinara</label>
    </div> --}}
</div>

@endsection
