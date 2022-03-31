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
