  <?php
    include 'config/connect.php';
    include 'function.php';

    $idEdit = $_GET['idEdit'];
    // lay thong tin cu cua tin tuc can EDIT
    $sql = "SELECT * FROM sales WHERE MaSale = $idEdit";
    $result = mysqli_query($connect, $sql);
    while ($row = $result->fetch_assoc()) {
      $MaSale     = $row['MaSale'];
      $title        = $row['title'];
      $gioithieu    = $row['gioithieu'];
      $noidung      = $row['noidung'];
      $gianguoilon  = $row['gianguoilon'];
      $giatreem     = $row['giatreem'];
      $ngaykhoihanh = $row['ngaykhoihanh'];
      $diemkhoihanh = $row['diemkhoihanh'];
      $MaLoai       = $row['MaLoai'];
      $imageEdit    = 'uploads/sales/'.$row['image'];
      $image        = $row['image'];
      $imageEditt    = 'uploads/sales/shows/'.$row['slideshow'];
      $slideshow        = $row['slideshow'];
    }
     
    $sql = "SELECT * FROM loaitour";
    $result = mysqli_query($connect, $sql);

    if (isset($_POST['edit_sale'])) {
      $MaSale = $_POST['MaSale'];
      $title = $_POST['title'];
      $gioithieu = $_POST['gioithieu'];
      $noidung = $_POST['noidung'];
      $gianguoilon = $_POST['gianguoilon'];
      $giatreem = $_POST['giatreem'];
      $ngaykhoihanh = $_POST['ngaykhoihanh'];
      $diemkhoihanh = $_POST['diemkhoihanh'];
      $MaLoai = $_POST['MaLoai'];

      $imageUpload  = $_FILES['image'];
      if (!$imageUpload['error']) {
        $imageName = uniqid().'-'.$imageUpload['name'];
        $pathSave = 'uploads/sales/';
        move_uploaded_file($imageUpload['tmp_name'], $pathSave.$imageName);
        $image = $imageName;
        // Remove anh cu khoi UPLOADS folder
        unlink($imageEdit);
      }
      $imageUploadd  = $_FILES['slideshow'];
      if (!$imageUploadd['error']) {
      $imageNamee = uniqid().'-'.$imageUploadd['name'];
      $pathSavee = 'uploads/sales/shows/';
      move_uploaded_file($imageUploadd['tmp_name'], $pathSavee.$imageNamee);
       $slideshow = $imageNamee;
      //   // Remove anh cu khoi UPLOADS folder
        unlink($imageEditt);
     }

      $sql = "UPDATE sales SET MaSale = $MaSale, MaLoai = $MaLoai, title = '$title', gioithieu = '$gioithieu', noidung = '$noidung', image = '$image', gianguoilon = '$gianguoilon', giatreem = '$giatreem', ngaykhoihanh = '$ngaykhoihanh', diemkhoihanh = '$diemkhoihanh', slideshow = '$slideshow' WHERE MaSale = $idEdit";
      mysqli_query($connect, $sql);
      // chuyen trang
      redirectPage('list_sale.php');

    }
	?>
  <?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Sales Promotion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="AddSale" action="#" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-1"><label>ID Sales:</label>
                      <input type="text" class="form-control" placeholder="" name="MaSale" value="<?php echo $MaSale?>">
                    </div>
                    <div class="col-xs-2"><label>Type Tour:</label>
                      <div class="form-group">
                          <select class="form-control" name="MaLoai">
                            <?php 
                                while ($row = $result->fetch_assoc()) {
                                  $id   = $row['MaLoai'];
                                  $selected = ($MaLoai == $id)?'selected':''; 
                                  $name = $row['TenLoai'];
                                  echo "<option value='$id'>$name</option>";
                                }
                            ?>
                          </select>
                        </div>
                    </div>
                    <div class="col-xs-4"><label>Title:</label>
                      <input type="text" class="form-control" placeholder="" name="title" value="<?php echo $title?>">
                    </div>
                    <div class="col-xs-5"><label>Introduce:</label>
                      <input type="text" class="form-control" placeholder="" name="gioithieu" value="<?php echo $gioithieu?>">
                    </div>
                  </div>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <input type="text" class="form-control" rows="3" placeholder="" name="noidung" value="<?php echo $noidung?>"></input>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-2"><label>Adult Price:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" name="gianguoilon" value="<?php echo $gianguoilon?>">
                            <span class="input-group-addon" style="color: red">VNÐ</span>
                        </div>
                    </div>
                    <div class="col-xs-2"><label>Children's Price:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="" name="giatreem" value="<?php echo $giatreem?>">
                            <span class="input-group-addon" style="color: red">VNÐ</span>
                        </div>
                    </div>
                    <div class="col-xs-3"><label>Departure Day:</label>
                      <div class="form-group">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" name="ngaykhoihanh" value="<?php echo $ngaykhoihanh?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-5"><label>Departure Location:</label>
                      <input type="text" class="form-control" placeholder="" name="diemkhoihanh" value="<?php echo $diemkhoihanh?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" id="exampleInputFile" name="image">
                  <img src="<?php  echo $imageEdit?>" width='10%'>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image Slideshow</label>
                  <input type="file" id="exampleInputFile" name="slideshow">
                  <img src="<?php  echo $imageEditt?>" width='10%'>
                </div>

              <button type="submit" class="btn btn-block btn-primary btn-lg" name="edit_sale">Submit</button>
                

              </form>
            </div>
            <!-- /.box-body -->
          </div>        
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php" ?>
