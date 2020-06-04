<h3>CATEGORIE</h3> 
<ul>
     @foreach($topCategories as $category)
     <li class="topCategories"><a href="{{route('catalog2',[$category->codCat])}}" title="{{$category->desc}}">{{$category->name}}</a> </li>
         @isset($selectedTopCategory)
         @isset($subCategories)
         @if($category->codCat==$selectedTopCategory->codCat)
         <ul>
             
            @foreach($subCategories as $subCategory) 
            <li><a href="{{route('catalog3',[$selectedTopCategory->codCat,$subCategory->codCat])}}">{{$subCategory->name}}</a> </li>
            @endforeach
           
         </ul>
         @endif
         @endisset()
         @endisset()
     @endforeach
</ul>