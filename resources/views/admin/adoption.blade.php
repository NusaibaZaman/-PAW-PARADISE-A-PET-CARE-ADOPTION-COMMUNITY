<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type='text/css'>
        .div_center
        {
            text-allign: center;
            padding-top: 40 px;
        }

      label
      {
        display: inline-block;
        width: 200px;
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
                <div class='div_center'>
                    <h1>Add animal for adoption :</h1>
                    <div>
                        <Label> Type :</label>
                        <select>
                            <option>Cat</option>
                            <option>Dog</option>
                        </select>
                    </div>

                    <div>
                        <Label> Breed :</label>
                        <input type='text' name='title' placeholder='Breed'>
                    </div>

                    <div>
                        <Label> Color :</label>
                        <input type='text' name='color' placeholder='Color'>
                    </div>

                    <div>
                        <Label> Age :</label>
                        <input type='number' name='age' placeholder='Age'>
                    </div>

                    <div>
                        <Label> Gender :</label>
                        <select>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div>
                        <Label> Personality :</label>
                        <input type='text' name='personality' placeholder='Personality'>
                    </div>

                    <div>
                        <Label> Image :</label>
                        <input type='file' name='image' placeholder='Image'>
                    </div>

                    <div>
                        <input type='submit' name='image' placeholder='Submit'>
                    </div>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>