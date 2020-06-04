@if(Auth::guest() || Auth::user()->role=='user')
    @isset($selectedTopCategory)
        @isset($selectedSubCategory)
            {{ Form::open(array('route' => ['filterProduct.store',$selectedTopCategory->codCat,$selectedSubCategory->codCat], 'id' => 'filterProducts')) }}
            {{ Form::text('search','',['class' => 'input','id'=>'search'])}}
            {{ Form::submit('Ricerca',['id'=>'submit'])}}
            @if ($errors->first('search'))
                        <ul class="errors">
                            @foreach ($errors->get('search') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
            @endif
            {{ Form::close()}}
        @endisset
    @endisset
@endif
