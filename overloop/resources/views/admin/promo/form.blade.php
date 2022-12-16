<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama"
        value="{{ isset($promo->nama) ? $promo->nama : '' }}">
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_mulai_berlaku') ? 'has-error' : '' }}">
    <label for="tanggal_mulai_berlaku" class="control-label">{{ 'Tanggal Mulai Berlaku' }}</label>
    <input class="form-control" name="tanggal_mulai_berlaku" type="date" id="tanggal_mulai_berlaku"
        value="{{ isset($promo->tanggal_mulai_berlaku) ? $promo->tanggal_mulai_berlaku : '' }}">
    {!! $errors->first('tanggal_mulai_berlaku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_kadaluarsa') ? 'has-error' : '' }}">
    <label for="tanggal_kadaluarsa" class="control-label">{{ 'Tanggal Kadaluarsa' }}</label>
    <input class="form-control" name="tanggal_kadaluarsa" type="date" id="tanggal_kadaluarsa"
        value="{{ isset($promo->tanggal_kadaluarsa) ? $promo->tanggal_kadaluarsa : '' }}">
    {!! $errors->first('tanggal_kadaluarsa', '<p class="help-block">:message</p>') !!}
</div>
<br>
<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
