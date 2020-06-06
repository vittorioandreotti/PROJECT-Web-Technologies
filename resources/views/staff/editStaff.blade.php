@extends('layouts.admin')
@section('title', 'Modifica Staff')

@section('scripts')
@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script>
    $(function () {
        var actionUrl = "{{ route('editStaff.store', [$staff->id]) }}";
        var formId = 'staffEditProfile';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#staffEditProfile").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
</script>
@endsection

@section('content')
<div id="editProfile">
    <h1>Modifica profilo staff</h1>
    {{ Form::open(array('route' => ['editStaff.store', $staff->id], 'id' => 'staffEditProfile')) }}
        <div  class="wrapInput">
            {{ Form::label('name', 'Nome *', ['class' => 'labelInput']) }}
            {{ Form::text('name',$staff->name, ['class' => 'input', 'id' => 'name']) }}
        </div>
        <div  class="wrapInput">
            {{ Form::label('surname', 'Cognome *', ['class' => 'labelInput']) }}
            {{ Form::text('surname', $staff->surname, ['class' => 'input', 'id' => 'surname']) }}
        </div>        
        <div  class="wrapInput">
            {{ Form::label('email', 'Email', ['class' => 'labelInput']) }}
            {{ Form::text('email', $staff->email, ['class' => 'input', 'id' => 'email']) }}
        </div>
        <div  class="wrapInput">
            {{ Form::label('residence', 'Residenza', ['class' => 'labelInput']) }}
            {{ Form::text('residence', $staff->residence, ['class' => 'input', 'id' => 'residence']) }}
        </div>
        <div  class="wrapInput">
            {{ Form::label('birthday', 'Data di nascita', ['class' => 'labelInput']) }}
            {{ Form::date('birthday', $staff->birthday, ['class' => 'input', 'id' => 'birthday']) }}
        </div>
        <div  class="wrapInput">
            {{ Form::label('job', 'Occupazione', ['class' => 'labelInput']) }}
            {{ Form::select('job',['default' => '--Seleziona--']+$jobs, $staff->job , ['class' => 'input', 'id' => 'job']) }}
        </div>
        <div id="containerButton">                
            {{ Form::submit('Salva', ['class' => 'submit']) }}
        </div>       
    {{ Form::close() }}
    <p>I campi contrassegnati con  <b> * </b> sono <b>obbligatori</b> </p>
</div>
@endsection