<h3>CATEGORIE</h3> 
<ul>
     @foreach($topCategories as $category)
     <li><a href="">{{$category->name}}</a></li>
     @endforeach
</ul>