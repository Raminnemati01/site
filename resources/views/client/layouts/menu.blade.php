<!-- Header -->
<header class="site-header fixed-header">
  <div class="container expanded">
    <div class="header-wrap">
      <div class="fixed-header-logo">
        <a href="index.html"><img src="/client/images/logo-white.png" alt=""></a>
      </div>
      <div class="is-fixed-header-logo">
        <a href="index.html"><img src="/client/images/logo.png" alt=""></a>
      </div>
      <div class="header-nav">
          <ul class="main-menu">


            <li><a href="contact.html">تماس با ما</a></li>
            @foreach($categories as $category)
            <li class="menu-item-has-children"><a href="#">{{$category->title}}</a>
              @if($category->children->count()>0)
              <ul class="sub-menu">
                @foreach($category->children as $childcategory)

                <li><a href="#">{{$childcategory->title}}</a></li>


              @endforeach
            </ul>
            @endif

            </li>
            @endforeach


                  <li><a href="services.html">خدمات</a></li>
                  <li><a href="index.html">صفحه اصلی</a></li>
          </ul>
      </div>
      <div class="header-widgets">
        <ul class="right-menu">
          <li class="menu-item menu-search">
            <a href="#search" id="menu-search-btn">
              <i class="fa fa-search"></i>
            </a>
          </li>
          <li class="menu-item free-quote">
            <div class="main-pink-button">
              <a href="#">Get Free Quote</a>
            </div>
          </li>
          <li class="menu-item menu-mobile-nav">
            <a href="#" class="menu-bar" id="menu-show-mobile-nav">
              <span class="hamburger"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
