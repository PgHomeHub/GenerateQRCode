<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homehub - Generate QRCode</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
  <link rel="shortcut icon" href="qrcode.ico"/>


  <link href="css/jquery-confirm.css" rel="stylesheet">

  <link href="css/bootstrap-datepicker3.css" rel="stylesheet">
  <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">



  <style type="text/css" media="screen">

    .sortable tr {
      cursor: pointer;
    }
    .right {
      text-align: right;
    }

    .left {
      text-align: left;
    }
    
  </style>






</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="http://192.168.100.12/Products/index.php">Generate QRCode</a>
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">หน้าหลัก
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row" >

      <!-- Blog Entries Column -->
      <div class="col-md-3">

        <h1 class="my-4"></h1>

        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">ใส่ข้อมูลเพื่อ GenQR</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
        </div>
        <button type="button" class="btn btn-primary btn-lg" id="btnGen">Click GenQR</button>



      </div>

      <div class="col-md-9">

        <h1 class="my-4"></h1>
        <!-- Blog Post -->
        <div class="card mb-4" style="margin-top:  15px;">
          <table class="table table-hover sortable" id="tbMain">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ข้อมความ</th>
                <th scope="col">QRCode</th>
              </thead>
              <tbody id="tBody">

              </tbody>
            </table>
          </div>





        </div>


      </div>


    </div>



    <div id="Modal_List" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" >
          <div class="modal-body" id="md_Body" >

            <div class="container">
              <h3 class="mt-5" id="md_VendorCode"></h3>
              <p class="lead" id="md_All"></p>
            </div>

            <table class="table table-hover" id="tbModal" style="font-size: 80%; ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">รหัสสินค้า</th>
                  <th scope="col">ชื่อสินค้า</th>
                  <th scope="col">หน่วย</th>
                  <th scope="col" style="text-align: right;">ยังไม่รับ</th>
                  <th scope="col" style="text-align: right;">สแกน</th>
                </tr>
              </thead>
              <tbody id="tBody_Modal">

              </tbody>
            </table>


          </div>
          <div class="modal-footer">
            <button type="button" id="CancelBill" class="btn btn-danger mr-auto">ยกเลิกและ Scan ใหม่</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          </div>


        </div>

      </div>
    </div>



  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="event.js?=<?php echo date("His"); ?>"></script>
<script src="js/jquery-confirm.js"></script>


<script src="js/bootstrap-datepicker.js"></script>
<script src="locales/bootstrap-datepicker.th.min.js"></script>


</body>

</html>
