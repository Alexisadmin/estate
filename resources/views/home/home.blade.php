
@section('title', 'Home')
@extends('content/user-interface/navigationbar')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span> Home</h4>

<div class="row">
  <div class="col-md">
    
    <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/plot/pl-1.jpg')}}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>First slide</h3>
            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-3.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-2.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md">
    
    <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
      </ol>
     
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-3.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-2.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md mb-4 mb-md-0">
    {{-- <small class="text-light fw-semibold">Basic Accordion</small> --}}
           <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie <br>
             Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake dragée ice
            cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly beans candy canes
            carrot cake. Fruitcake chocolate chupa chups. <br>
            Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops cheesecake. Bonbon gingerbread
            marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake dragée caramels. Ice cream
            wafer danish cookie caramels muffin.
          <br>
           Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi bears macaroon dragée danish caramels powder.
           Bear claw dragée pastry topping soufflé. Wafer gummi bears marshmallow pastry pie.
          <br>
          Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing marzipan gummi
            bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping soufflé. Wafer gummi bears
            marshmallow pastry pie.
          </div>
        </div>
   

    </div>
  </div>

  <div class="card mb-4">
    <h5 class="card-header">Javascript behavior</h5>
    <div class="card-body">
      <div class="row">
        <!-- Custom content with heading -->
        <div class="col-lg-6 mb-4 mb-xl-0">
          <small class="text-light fw-semibold">Vertical</small>
          <div class="mt-3">
            <div class="row">
              <div class="col-md-4 col-12 mb-3 mb-md-0">
                <div class="list-group">
                  <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home">Home</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile">Profile</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages">Messages</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings">Settings</a>
                </div>
              </div>
              <div class="col-md-8 col-12">
                <div class="tab-content p-0">
                  <div class="tab-pane fade show active" id="list-home">
                    Donut sugar plum sweet roll biscuit. Cake oat cake gummi bears. Tart wafer wafer halvah gummi bears
                    cheesecake. Topping croissant cake sweet roll. Dessert fruitcake gingerbread halvah marshmallow pudding
                    bear claw cheesecake. Bonbon dragée cookie gummies. Pudding marzipan liquorice. Sugar plum dragée
                    cupcake cupcake cake dessert chocolate bar. Pastry lollipop lemon drops lollipop halvah croissant.
                    Pastry sweet gingerbread lemon drops topping ice cream.
                  </div>
                  <div class="tab-pane fade" id="list-profile">
                    Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies gummies. Ice cream
                    powder marshmallow cotton candy oat cake wafer. Marshmallow gingerbread tootsie roll. Chocolate cake
                    bonbon jelly beans lollipop jelly beans halvah marzipan danish pie. Oat cake chocolate cake pudding bear
                    claw liquorice gingerbread icing sugar plum brownie. Toffee cookie apple pie cheesecake bear claw sugar
                    plum wafer gummi bears fruitcake.
                  </div>
                  <div class="tab-pane fade" id="list-messages">
                    Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry chocolate chupa chups
                    tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie carrot cake chocolate macaroon. Halvah
                    jelly jelly beans cake macaroon jelly-o. Danish pastry dessert gingerbread powder halvah. Muffin bonbon
                    fruitcake dragée sweet sesame snaps oat cake marshmallow cheesecake. Cupcake donut sweet bonbon
                    cheesecake soufflé chocolate bar.
                  </div>
                  <div class="tab-pane fade" id="list-settings">
                    Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah jelly-o. Jelly-o
                    muffin macaroon cake gingerbread candy cupcake. Cake lollipop lollipop jelly brownie cake topping
                    chocolate. Pie oat cake jelly. Lemon drops halvah jelly cookie bonbon cake cupcake ice cream. Donut tart
                    bonbon sweet roll soufflé gummies biscuit. Wafer toffee topping jelly beans icing pie apple pie toffee
                    pudding. Tiramisu powder macaroon tiramisu cake halvah.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <small class="text-light fw-semibold">Horizontal</small>
          <div class="demo-inline-spacing mt-3">
            <div class="list-group list-group-horizontal-md text-md-center">
              <a class="list-group-item list-group-item-action active" id="home-list-item" data-bs-toggle="list" href="#horizontal-home">Home</a>
              <a class="list-group-item list-group-item-action" id="profile-list-item" data-bs-toggle="list" href="#horizontal-profile">Profile</a>
              <a class="list-group-item list-group-item-action" id="messages-list-item" data-bs-toggle="list" href="#horizontal-messages">Messages</a>
              <a class="list-group-item list-group-item-action" id="settings-list-item" data-bs-toggle="list" href="#horizontal-settings">Settings</a>
            </div>
            <div class="tab-content px-0 mt-0">
              <div class="tab-pane fade show active" id="horizontal-home">
                Donut sugar plum sweet roll biscuit. Cake oat cake gummi bears. Tart wafer wafer halvah gummi bears
                cheesecake. Topping croissant cake sweet roll. Dessert fruitcake gingerbread halvah marshmallow pudding bear
                claw cheesecake. Bonbon dragée cookie gummies. Pudding marzipan liquorice. Sugar plum dragée cupcake cupcake
                cake dessert chocolate bar. Pastry lollipop lemon drops lollipop halvah croissant. Pastry sweet gingerbread
                lemon drops topping ice cream.
              </div>
              <div class="tab-pane fade" id="horizontal-profile">
                Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies gummies. Ice cream
                powder marshmallow cotton candy oat cake wafer. Marshmallow gingerbread tootsie roll. Chocolate cake bonbon
                jelly beans lollipop jelly beans halvah marzipan danish pie. Oat cake chocolate cake pudding bear claw
                liquorice gingerbread icing sugar plum brownie. Toffee cookie apple pie cheesecake bear claw sugar plum
                wafer gummi bears fruitcake.
              </div>
              <div class="tab-pane fade" id="horizontal-messages">
                Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry chocolate chupa chups
                tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie carrot cake chocolate macaroon. Halvah jelly
                jelly beans cake macaroon jelly-o. Danish pastry dessert gingerbread powder halvah. Muffin bonbon fruitcake
                dragée sweet sesame snaps oat cake marshmallow cheesecake. Cupcake donut sweet bonbon cheesecake soufflé
                chocolate bar.
              </div>
              <div class="tab-pane fade" id="horizontal-settings">
                Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah jelly-o. Jelly-o muffin
                macaroon cake gingerbread candy cupcake. Cake lollipop lollipop jelly brownie cake topping chocolate. Pie
                oat cake jelly. Lemon drops halvah jelly cookie bonbon cake cupcake ice cream. Donut tart bonbon sweet roll
                soufflé gummies biscuit. Wafer toffee topping jelly beans icing pie apple pie toffee pudding. Tiramisu
                powder macaroon tiramisu cake halvah.
              </div>
            </div>
          </div>
        </div>
        <!--/ Custom content with heading -->
      </div>
    </div>
  </div>
</div>


@endsection
