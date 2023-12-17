<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paw Paradise</title>
    <link rel="icon" href="home/mg/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="home/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="home/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="home/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="home/css/style.css">

    <style>
        .img-fluid
        {
            width: 370px;
            height: 300px;
        }
        .post
        {
            text-align: center;
            padding-top:40px;
        }

        .reset
        {
             width: 100%;
             padding-top: 10px;
             text-align: right;
         }

        .main-panel
        {
            background-color: #36454f;
        }

        .content-wrapper
        {
            background-color: #36454f;
        }
        .div_center
        {
            text-align: center;
            padding-top: 40 px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .center
        {
          margin: auto;
          width: 70%;
          height: 15%;
          color: black;
          text-align: center;
          margin-top: 30px;
          border-collapse: collapse;
          font-size: 1.2em;
          font-weight: normal;
          min-width: 400px;
        }
        .center1
        {
            background-color: #009879;
            color: #ffffff;

        }
        .center2
        {
          padding: 12px;
          border-bottom: 1px solid #dddddd;
          background-color: #f3f3f3;
        }

        .img_size
        {
            width: 150px;
            height: 150px;
        }

        .search
        {
             color: #ffffff;
             background-color: #b08ead;
             width: 100%;
             margin-left: 100px;
             text-align: center;
         }

         .search_options
        {
             width: 100%;
             padding-top: 10px;
             text-align: right;
         }

        .div_design
        {
             text-align: right;
             padding-top: 15px;
        }

          .message
        {
            color: #ffffff;
            background-color: #b08ead;
            font-size: 2em;
            width: 90%;
            text-align: center;
        }
    </style>



</head>

<body>
    <!--::header part start::-->
    @include('home.header')
    <!-- Header part end-->

    <!-- banner part start-->
    <!-- banner part start-->

    <!-- product list start-->
    <section class="breadcrumb_part" style="height:250px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>YOUR VPET</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product_list section_padding">
        <div class="container">
          <div class="row">

          @if(!empty($data) && $data->count() > 0)
            <div class="col-md-2>

            </div>

            <div class="col-md-6">
                @foreach($data as $data)
                <div class="col-lg-6 col-sm-6">
                    <div class="single_product_item">
                        <img src="/adoptpic/{{$data->image}}" alt="#" class="img-fluid">
                        <h3> <a>{{$data->title}}</a> </h3>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="col-md-2">
                <div>
                    <form action="{{url('del_vpet')}}" method="get">
                        <div class="div_design">
                            <button type='submit' name='submit' value=1> Give Pet Up for Adoption </button>
                        </div>
                    </form>
                </div>
            </div>

          @else

            @if($message='create')
                 <div>
                    <form action="{{url('add_vpet')}}" method="get">

                    @csrf

                    <h1 class="search">DESCRIBE YOUR IDEAL PET</h1>

                        <div class="search_options">
                            <Label> Type :</label>
                            <input type='text' name='type' placeholder='Type of Animal'>
                        </div>

                        <div class="search_options">
                            <Label> Breed :</label>
                            <input type='text' name='breed' placeholder='Breed'>
                        </div>

                        <div class="search_options">
                            <Label> Gender :</label>
                            <input type='text' name='gender' placeholder='Gender'>
                        </div>

                        <h1 class="search_options">Now name them</h1>

                        <div class="search_options">
                            <Label> Name :</label>
                            <input type='text' name='name' placeholder='Name'>
                        </div>



                        <div class="div_design">
                            <button type='submit' name='submit' value=1> Adopt </button>
                        </div>

                    </form>
                </div>

            @else
                <section>
                    <div class="post">
                        <a href="{{url('create_vpet')}}" class="btn_3">Create A VPet</a>
                    </div>
                </section>

             @endif
          @endif
          </div>
        </div>
    </section>

    <!-- product list end-->

    <!-- client review part here -->
    @include('home.reviews')
    <!-- client review part end -->

    <!-- subscribe part here -->
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    @include('home.footer')
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="home/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="home/js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="home/js/slick.min.js"></script>
    <script src="home/js/jquery.counterup.min.js"></script>
    <script src="home/js/waypoints.min.js"></script>
    <script src="home/js/contact.js"></script>
    <script src="home/js/jquery.ajaxchimp.min.js"></script>
    <script src="home/js/jquery.form.js"></script>
    <script src="home/js/jquery.validate.min.js"></script>
    <script src="home/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>
