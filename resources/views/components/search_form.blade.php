<div class="filter_form hidden" id="filter_form" >
    <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group col-lg-3 col-xs-12 col-xl-3">
            <input type="text" id="idConsumer" name="idConsumer" class="form-control" placeholder="Sifra korisnika"/>
        </div>
        <div class="form-group">
            <input type="submit" id="btnSearch" name="btnSearch" class="btn btn-primary" value="Trazi"/>
        </div>
    </form>
</div>
