<div class="form-group {{ $errors->has('kolomnama') ? 'has-error' : ''}}">
    <label for="kolomnama" class="control-label">{{ 'Kolomnama' }}</label>
    <input class="form-control" name="kolomnama" type="text" id="kolomnama" value="{{ isset($feedback->kolomnama) ? $feedback->kolomnama : ''}}" >
    {!! $errors->first('kolomnama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($feedback->email) ? $feedback->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kolomkomentar') ? 'has-error' : ''}}">
    <label for="kolomkomentar" class="control-label">{{ 'Kolomkomentar' }}</label>
    <input class="form-control" name="kolomkomentar" type="text" id="kolomkomentar" value="{{ isset($feedback->kolomkomentar) ? $feedback->kolomkomentar : ''}}" >
    {!! $errors->first('kolomkomentar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
