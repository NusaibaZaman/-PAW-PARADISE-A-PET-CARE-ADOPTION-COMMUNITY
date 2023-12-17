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
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>Available Adoption</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="post">
            <a href="{{url('adoptpost')}}" class="btn_3">Add Adoption</a>
        </div>
    </section>

    <section class="product_list section_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        @if(!empty($data) && $data->count() > 0)
                            @foreach($data as $data)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="/adoptpic/{{$data->image}}" alt="#" class="img-fluid">
                                    <h3> <a href="{{url('description')}}">{{$data->title}}</a> </h3>
                                    <p>Personality: {{$data->personality}}</p>
                                </div>
                            </div>
                            @endforeach

                        @else
                            <div class="message"> <?php echo $message ?> </div>

                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <form action="{{url('home_search_adopt')}}" method="get">

                    @csrf

                    <h1 class="search">Animal Finder</h1>
                    <h1 class="search_options" style="font-size: 1.2em"">Enter features to search:</h1>

                        <div class="search_options">
                            <Label> Type :</label>
                            <input type='text' name='type' placeholder='Type of Animal'>
                        </div>

                        <div class="search_options">
                            <Label> Breed :</label>
                            <input type='text' name='breed' placeholder='Breed'>
                        </div>


                        <div class="search_options">
                            <Label> Max Age :</label>
                            <input type='text' name='age' placeholder='Age'>
                        </div>

                        <div class="search_options">
                            <Label> Gender :</label>
                            <input type='text' name='gender' placeholder='Gender'>
                        </div>


                        <div class="div_design">
                            <button type='submit' name='exact' value=1> Find exact </button>
                        </div>
                        <div class="div_design">
                            <button type='submit' name='all' value=1> Find similar </button>
                        </div>



                        <div class="div_design">
                            <input type="submit" value="VIEW ALL">
                        </div>


                    </form>
                </div>
            </div>
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
