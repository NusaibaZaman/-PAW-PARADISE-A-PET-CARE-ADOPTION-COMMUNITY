<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type='text/css'>
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
        .div_design
        {
            padding-bottom: 15px;
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
             width: 100%;
             padding-top: 60px;
         }

         .search_options
        {
             width: 100%;
             padding-top: 10px;
         }

        .reset
        {
             width: 100%;
             padding-top: 10px;
             text-align: right;
         }

         .message
        {
            background-color: #009879;
            margin:auto;
            width:70%;
            text-align:center;
            font-size: 2em;
        }

    </style>
  </head>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-light" role="alert">
                <button type="button" class='close' data-dismiss='alert' aria-hidden="true">X</button>
                {{session()->get('message')}}
                </div>
                @endif
                <div class='div_center'>
                    <h1>Add animal for adoption :</h1>
                    <form action="{{url('/add_adoption')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <Label> Type :</label>
                            <select name='type' require=''>
                                <option>Type of animal</option>
                                <option>Cat</option>
                                <option>Dog</option>
                            </select>
                        </div>

                        <div class="div_design">
                            <Label> Title :</label>
                            <input type='text' name='title' placeholder='Title' required="">
                        </div>

                        <div class="div_design">
                            <Label> Breed :</label>
                            <input type='text' name='breed' placeholder='Breed' required="">
                        </div>

                        <div class="div_design">
                            <Label> Color :</label>
                            <input type='text' name='color' placeholder='Color' required="">
                        </div>

                        <div class="div_design">
                            <Label> Personality :</label>
                            <input type='text' name='personality' placeholder='Personality' required="">
                        </div>

                        <div class="div_design">
                            <Label> Age :</label>
                            <input type='text' name='age' placeholder='Age' required="">
                        </div>

                        <div class="div_design">
                            <Label> Description :</label>
                            <input type='text' name='description' placeholder='Description' required="">
                        </div>

                        <div class="div_design">
                            <Label> Gender :</label>
                            <select name='gender' require=''>
                                <option>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="div_design">
                            <Label> Image :</label>
                            <input type='file' name='image' placeholder='Image' required="">
                        </div>

                        <div class="div_design">
                            <input type='submit' name='submit' placeholder='Submit'>
                        </div>
                </form>
                </div>

                <div style="margin:auto;width:70%;">
                    <form action="{{url('admin_search_adopt')}}" method="get">

                    @csrf

                    <h1 class="search">Animal Finder</h1>
                    <h1 class="search_options" style="font-size: 1.2em"">Enter features to search:</h1>

                    <div class="row">
                        <div class="col-md-10">
                            <div class="search_options">
                                <Label> ID :</label>
                                <input type='number' name='id' placeholder='ID'>
                            </div>

                            <div class="search_options">
                                <Label> Type :</label>
                                <select name='type'>
                                    <option value="nothing"> Type of animal </option>
                                    <option> Dog </option>
                                    <option> Cat </option>
                                </select>
                            </div>

                            <div class="search_options">
                                <Label> Breed :</label>
                                <input type='text' name='breed' placeholder='Breed'>
                            </div>


                            <div class="search_options">
                                <Label> Max Age :</label>
                                <input type='number' name='age' placeholder='Age'>
                            </div>

                            <div class="search_options">
                                <Label> Gender :</label>
                                <select name='gender'>
                                    <option>Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>


                            <div class="div_design">
                                <button type='submit' name='exact' value=1> Find exact </button>
                            </div>
                            <div class="div_design">
                                <button type='submit' name='all' value=1> Find similar </button>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="reset">
                                <input type="submit" value="VIEW ALL">
                            </div>
                        </div>

                    </form>
                    </div>
                </div>

                @if(!empty($data) && $data->count() > 0)
                    <table class="center">
                        <tr class="center1">
                            <td>Title</td>
                            <td>Type</td>
                            <td>Breed</td>
                            <td>Color</td>
                            <td>Age</td>
                            <td>Gender</td>
                            <td>Personality</td>
                            <td>Picture</td>
                            <td>Number</td>
                            <td>User</td>
                            <td>Description</td>
                            <td>Remove</td>
                        </tr>

                        @foreach($data as $data)
                        <tr class="center2">
                            <td>{{$data->title}}</td>
                            <td>{{$data->type}}</td>
                            <td>{{$data->breed}}</td>
                            <td>{{$data->color}}</td>
                            <td>{{$data->age}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->personality}}</td>
                            <td>
                                <img src="/adoptpic/{{$data->image}}" class='img_size'></td>
                            <td>{{$data->number}}</td>
                            <td>{{$data->user}}</td>
                            <td>{{$data->description}}</td>
                            <td>
                                <a class="btn btn-danger" href ="{{url('delete_adoption',$data->id)}}">Remove</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                @else
                        <div class="message"> <?php echo $message ?> </div>

                @endif

            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#type').on('change',function() {
                echo 'asdasdas';
                var typeVal ='Dog';
                if(typeVal)
                {
                    $.ajax({
                        url: '/admin_search_breed/'+typeVal,
                        type: "get",
                        data : {"_token":"{{ csrf_token() }}"},
                        dataType : "json",
                        success:function(data)
                        {
                            $(#breed).empty();
                            $('#course').append('<option >Choose Course</option>');
                            $.each(data, function(breed)
                            {
                                $('select[name="breed"]').append('<option value=breed.breed>' + breed.breed '</option>');
                            }
                            );
                        }
                        });
                }
                else{
                    $(#type).append('<option value='fuck'>'+ 'No breeds are available for this type' +'</option>');
                    }
            });
        });
    </script>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
