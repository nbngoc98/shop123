<?php
    include 'config/connect.php';

  ?>
  <?php include "header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
      <div class="col-md-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Comment</h3>

                <div class="box-tools">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table">
                  <tr>
                    <th style="width: 12%; ">Mã Comment</th>
                    <th style="width: 13%; ">Tên Thành Viên</th>
                    <th style="width: 12%; ">Tên Tour</th>
                    <th style="width: 45%;">Nội Dung Comment</th>
                    <th >Vote</th>
                    <th style="width: 5%;"></th>
                    <th style="width: 5%;" ></th>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="button" class="btn btn-block btn-danger btn-sm">Trả lời</button></td>
                    <td><button type="button" class="btn btn-block btn-danger btn-sm">Xóa</button></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php" ?>
