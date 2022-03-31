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
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <select class="form-control" name="type" id="type">
                <option value="" disabled selected class="value">Tip intervencije</option>
                @foreach($types as $type)
                    <option value="{{ $type->id_type }}">{{ $type->type }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" id="btnInterventionInsert" name="btnInterventionInsert" class="btn btn-primary" value="Dodaj"/>
        </div>
    </form>
</div>
