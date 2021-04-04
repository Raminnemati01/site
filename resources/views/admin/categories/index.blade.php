@extends('admin.layouts.master')

@section('content')
<div class="main-content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card mb-30">
          <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-center">
                  <h4 class="font-20">دسته بندی ها</h4>

                  <div class="d-flex flex-wrap">
                      <!-- Date Picker -->
                      <div class="dashboard-date style--six ml-20 mt-3 mt-sm-0">
                         <span class="input-group-addon">
                            <img src="../../assets/img/svg/calender-color.svg" alt="" class="svg">
                          </span>

                         <input type="text" id="default-date" value="28 October 2019"/>
                      </div>
                      <!-- End Date Picker -->


                      <!-- Dropdown Button -->
                    <div class="dropdown-button mt-3 mt-sm-0">
                      <button type="button" class="btn style--two orange" data-toggle="dropdown">Download <i class="icofont-simple-down"></i></button>

                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Print</a>
                          <a class="dropdown-item" href="#">EXL</a>
                          <a class="dropdown-item" href="#">PDF</a>
                      </div>
                   </div>
                   <!-- End Dropdown Button -->
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <!-- Invoice List Table -->
              <table class="text-nowrap card_color-bg dh-table">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>دسته بندی مادر </th>
                          <th>عنوان</th>
                          <th>ویرایش </th>
                          <th>حذف </th>

                      </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                      <tr>
                          <td>{{$category->id}} </td>
                          <td>{{optional($category->parent)->title}}</td>
                          <td>{{$category->title}}</td>
                      <td><a href="{{route('categories.edit' , $category )}}" class="status-btn paid" >ویرایش</a></td>
                          <td>
                            <form  action="{{route('categories.destroy' , $category)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="status-btn un_paid" value="حذف">
                            </form>
                          </td>
                          <td><a href="invoice-details.html" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                      </tr>
                      @endforeach


                  </tbody>
              </table>
              <!-- End Invoice List Table -->
          </div>
      </div>

    </div>

  </div>

</div>
</div>
@endsection
