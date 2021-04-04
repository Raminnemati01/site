<div class="mobile-nav-wrapper">
  <div class="mobile-menu-inner">
    <ul class="mobile-menu">
      <li><a href="index.html">صفحه اصلی</a></li>
      <li><a href="services.html">خدمات</a></li>
            @foreach($categories as $category)
      <li class="has-sub"><a href="#"> {{$category->title}}<i class="sub-icon fa fa-angle-down"></i></a>
        @if($category->children->count()>0)
        <ul class="sub-menu">
          @foreach($category->children as $childcategory)

          <li><a href="#">{{$childcategory->title}}</a></li>


        @endforeach
      </ul>
      @endif
      </li>
        @endforeach



      <li><a href="contact.html">تماس با ما</a></li>
    </ul>
  </div>
</div>
<div class="mobile-menu-overlay"></div>
