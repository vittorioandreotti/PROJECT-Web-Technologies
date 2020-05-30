@extends('layouts.admin')

@section('title', 'ADMIN')

@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
<div class="adminContainer clearfix">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo lavoratore come Staff</p>

    <div class="box">
        
        {{ Form::open(array('route' => 'newstaff.store', 'id' => 'addStaff', 'files' => true, 'class' => 'contact-form')) }}
          
                
        {{ Form::label('name', 'Nome Staff', ['class' => 'label-input']) }}
        {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                
                
        {{ Form::label('surname', 'Cognome Staff', ['class' => 'label-input']) }}
        {{ Form::text('surname','', ['class' => 'input','id' => 'surname']) }}

        
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', '', ['id' => 'username']) }}

        
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', '', ['id' => 'email']) }}
        
        

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['id' => 'password']) }}
        
        

        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
        {{ Form::password('password_confirmation', ['id' => 'password-confirm']) }}

        
        {{ Form::label('job', 'Occupazione') }}
        {{ Form::text('job', '',  ['id' => 'job']) }}
        
        
        {{ Form::label('birthday', 'Data di nascita') }}
        {{ Form::text('birthday', '', ['id' => 'birthday']) }}
        
        
        {{ Form::label('residence', 'Luogo di residenza') }}
        {{ Form::text('residence', '', ['id' => 'residence']) }}
             
        
        {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
            
        {{ Form::close() }}
        
    </div>

</div>
@endsection

