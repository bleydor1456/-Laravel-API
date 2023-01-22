<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $libro->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $libro->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pages') }}
            {{ Form::text('pages', $libro->pages, ['class' => 'form-control' . ($errors->has('pages') ? ' is-invalid' : ''), 'placeholder' => 'Pages']) }}
            {!! $errors->first('pages', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor_Id') }}
            {{ Form::text('autor_Id', $libro->autor_Id, ['class' => 'form-control' . ($errors->has('autor_Id') ? ' is-invalid' : ''), 'placeholder' => 'Autor Id']) }}
            {!! $errors->first('autor_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>