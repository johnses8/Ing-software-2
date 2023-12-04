
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre cliente') }}</label>
    <div>
        {{ Form::text('Nombre cliente', $client->Nombre cliente, ['class' => 'form-control' .
        ($errors->has('Nombre cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
        {!! $errors->first('Nombre cliente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Nombre cliente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('`C cliente`') }}</label>
    <div>
        {{ Form::text('`C cliente`', $client->`C cliente`, ['class' => 'form-control' .
        ($errors->has('`C cliente`') ? ' is-invalid' : ''), 'placeholder' => '`C Cliente`']) }}
        {!! $errors->first('`C cliente`', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>`C cliente`</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
