<h3>CATEGORIE</h3> 
<ul>
     @foreach($topCategories as $category)
     <li><a href="{{route('catalog2',[$category->codCat])}}">{{$category->name}}</a>
         @isset($selectedTopCategories)
         @isset($subCategories)
         @if($category->codCat==$selectedTopCategories->codCat)
         <ul>
             
            @foreach($subCategories as $subcategory) 
            <li><a href="">{{$subcategory->name}}</a> </li>
            @endforeach
           
         </ul>
         @endif
         @endisset()
         @endisset()
     </li>
     @endforeach
</ul>