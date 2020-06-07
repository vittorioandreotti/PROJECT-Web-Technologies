@extends('layouts.admin')

@section('title', 'ADMIN')

@section('link')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}" > 
@endsection


@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script>
    $(function () {
        var actionUrl = "{{ route('newstaff.store') }}";
        var formId = 'addStaff';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#addStaff").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
</script>
@endsection

@section('content')
<div class="containerRegistration">
    <h3>Aggiungi Staff</h3>
    <p>Utilizza questa form per inserire un nuovo lavoratore come Staff</p>
        
        {{ Form::open(array('route' => 'newstaff.store', 'id' => 'addStaff', 'class' => 'contact-form')) }}
          
     <div class="wrapInput">          
        {{ Form::label('name', 'Nome Staff *', ['class' => 'labelInput']) }}
        {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
    </div>           
    <div class="wrapInput">          
        {{ Form::label('surname', 'Cognome Staff *', ['class' => 'labelInput']) }}
        {{ Form::text('surname','', ['class' => 'input','id' => 'surname']) }}
    </div>
    <div class="wrapInput">    
        {{ Form::label('email', 'Email',['class' => 'labelInput']) }}
        {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
    </div>
    <div class="wrapInput">   
        {{ Form::label('job', 'Occupazione',['class' => 'labelInput']) }}
        {{ Form::select('job',[null => '--Seleziona--']+ $jobs,  ['class' => 'input','id' => 'job']) }}
    </div>    
    <div class="wrapInput">    
        {{ Form::label('birthday', 'Data di nascita',['class' => 'labelInput']) }}
        {{ Form::date('birthday', '', ['class' => 'input','id' => 'birthday']) }}
    </div>    
    <div class="wrapInput">    
        {{ Form::label('residence', 'Luogo di residenza',['class' => 'labelInput']) }}
        {{ Form::text('residence', '', ['class' => 'input','id' => 'residence']) }}
    </div>
    <div class="wrapInput">    
        {{ Form::label('username', 'Username *',['class' => 'labelInput']) }}
        {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
    </div>
    <div class="wrapInput">    
        {{ Form::label('password', 'Password *',['class' => 'labelInput']) }}
        {{ Form::password('password', ['class' => 'input','id' => 'password']) }}
    </div>    
    <div class="wrapInput">    
        {{ Form::label('password_confirmation', 'Conferma password*', ['class' => 'labelInput']) }}
        {{ Form::password('password_confirmation', ['class' => 'input','id' => 'password_confirmation']) }}
    </div>             
        {{ Form::submit('Aggiungi', ['class' => 'submit','id'=>'submit']) }}
        {{ Form::reset('Cancella',['class'=>'cancel','id'=>'cancel']) }}   
        {{ Form::close() }}
        <p>I campi contrassegnati con  <b> * </b> sono <b>obbligatori</b> </p>

</div>
@endsection

