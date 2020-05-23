<h3>CATEGORIE</h3> 
<ul>
     @foreach($topCategories as $category)
     <li><a href="">{{$category->name}}</a>
         @isset($subCategories)
         <ul>
             <a href="">{{$subCategories->name}}</a>
         </ul>
         @endisset()
     </li>
     @endforeach
</ul>