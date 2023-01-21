@extends('layouts/ContentLayout')

@section('title', 'Easy Estate Rwanda')

@section('content')

  <div class="col-xl-12">
    
    <div class="nav-align-top mb-4">
      <h6 class="mt-4 mb-3 text-muted">Open on hover</h6>
  <nav class="navbar navbar-example navbar-expand-lg bg-light" style="z-index: 20">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-15">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-ex-15">
        <ul class="navbar-nav me-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" data-trigger="hover">Dropdown</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void(0)">Action</a>
              <a class="dropdown-item" href="javascript:void(0)">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
            </div>
          </li>
          <li class="nav-item mega-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-15-mega-dropdown mega-dropdown" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">Mega</a>
            <div class="dropdown-menu px-3 py-0">
              <div class="row row-bordered">
                <div class="col-sm-6 col-lg p-3">
                  <h6 class="m-2 fw-bold">Applications</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)"><i class="tf-icons bx bx-envelope"></i> Email</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)"><i class="tf-icons bx bx-chat"></i> Chat</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)"><i class="tf-icons bx bx-task"></i> ToDos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)"><i class="tf-icons bx bx-calendar"></i> Calender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link disabled" href="javascript:void(0)" tabindex="-1"><i class="tf-icons bx bx-block"></i> Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6 col-lg p-3">
                  <h6 class="m-2 fw-bold">Useful Links</h6>
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)">Profit Margins</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)">Overall Profits</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)">Gross Profits</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)">Net Profits</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mega-dropdown-link" href="javascript:void(0)">Quarterly Profits</a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6 col-lg p-3">
                  <h6 class="my-2 fw-bold">List Group</h6>
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action mega-dropdown-link">Analytical Reports</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action mega-dropdown-link">Operational Growth</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action mega-dropdown-link">Files and Directories</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action mega-dropdown-link">Audit & Logs</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action mega-dropdown-link">Customer CRM</a>
                  </div>
                </div>
                <div class="col-sm-6 col-lg p-3">
                  <form onsubmit="return false">
                    <div class="mb-3">
                      <label class="form-label" for="exampleDropdownFormEmail2">Email address</label>
                      <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="exampleDropdownFormPassword2">Password</label>
                      <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck1" />
                        <label class="form-check-label" for="dropdownCheck1">
                          Remember me
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
       
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
          <p>
            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps powder. Bear
            claw
            candy topping.
          </p>
          <p class="mb-0">
            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon jelly-o
            jelly-o ice
            cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow jujubes sweet.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
          <p>
            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice cream. Gummies
            halvah
            tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream cheesecake fruitcake.
          </p>
          <p class="mb-0">
            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah cotton candy
            liquorice caramels.
          </p>
        </div>
        <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
          <p>
            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies cupcake gummi
            bears
            cake chocolate.
          </p>
          <p class="mb-0">
            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet roll icing
            sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly jelly-o tart brownie
            jelly.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Tabs -->



<!-- Pills -->
@endsection
