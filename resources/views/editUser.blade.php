@extends('layouts.user')
@section('title', 'Profilo Personale')

@section('link')
@parent 
<link rel="stylesheet" type="text/css" href="{{ asset('css/editUser.css') }}" > 
@endsection
@section('scripts')

@parent
<script src="{{ asset('js/formValid.js') }}" ></script>
<script>
    $(function () {
        var actionUrl = "{{ route('editProfile.store') }}";
        var formId = 'formEditProfile';
        $(":input").on('blur', function (event) {
            var formElementId = $(this).attr('id');
            doElemValidation(formElementId, actionUrl, formId);
        });
        $("#formEditProfile").on('submit', function (event) {
            event.preventDefault();
            doFormValidation(actionUrl, formId);
        });
    });
</script>
@endsection

@section('content')
<div id="editProfile">
    <h1>Modifica profilo</h1>
    <hr>
    {{ Form::open(array('route' => 'editProfile.store', 'id' => 'formEditProfile')) }}
                <div class="wrapInput">
                    {{ Form::label('name', 'Nome', ['class' => 'labelInput']) }}
                    {{ Form::text('name',auth()->user()->name, ['class' => 'input', 'id' => 'name']) }}
                </div>
                                      <div class="wrapInput">
                    {{ Form::label('surname', 'Cognome', ['class' => 'labelInput']) }}
                    {{ Form::text('surname', auth()->user()->surname, ['class' => 'input', 'id' => 'surname']) }}
                </div>
                   
                <div class="wrapInput">
                    {{ Form::label('email', 'Email', ['class' => 'labelInput']) }}
                    {{ Form::text('email', auth()->user()->email, ['class' => 'input', 'id' => 'email']) }}
                </div>
                   
                <div class="wrapInput">
                    {{ Form::label('residence', 'Residenza', ['class' => 'labelInput']) }}
                    {{ Form::text('residence', auth()->user()->residence, ['class' => 'input', 'id' => 'residence']) }}
                </div>
              
                <div class="wrapInput">
                     {{ Form::label('birthday', 'Data di nascita', ['class' => 'labelInput']) }}
                    {{ Form::date('birthday', auth()->user()->birthday, ['class' => 'input', 'id' => 'birthday']) }}
                </div>
                  
                <div class="wrapInput">
                     {{ Form::label('job', 'Occupazione', ['class' => 'labelInput']) }}
                    {{ Form::select('job',$jobs, $job , ['class' => 'input', 'id' => 'job']) }}
                </div>                    
                     
               
                <div id="containerButton">                
                    {{ Form::submit('Salva', ['class' => 'submit']) }}
                </div>
    {{ Form::close() }}
</div>
@endsection