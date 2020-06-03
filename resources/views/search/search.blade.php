@if(Auth::guest() || Auth::user()->role=='user')
    @isset($selectedTopCategory)
        @isset($selectedSubCategory)
            {{ Form::open(array('route' => ['filterProduct.store',$selectedTopCategory->codCat,$selectedSubCategory->codCat], 'id' => 'filterProducts')) }}
            {{ Form::text('search',['id'=>'search'])}}
            {{ Form::submit('Cerca',['id'=>'submit'])}}
            {{ Form::close()}}
        @endisset
    @endisset
@endif
