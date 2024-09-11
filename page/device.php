<?php
$page = $_GET['page'];
$insert = false;

if(isset($_POST['edit_data'])){
  $old_id = $_POST['edit_data'];
  $serial_number = $_POST['serial_number'];
  $controller_type = $_POST['controller'];
  $location = $_POST['location'];
  $active = $_POST['active'];


  $sql_edit = "UPDATE `devices` SET 
  `Serial Number` = ' $serial_number', 
  `mcu_type` = '$controller_type', 
  `location` = '$location', 
  `active` = '$active' 
  WHERE `devices`.`Serial Number` = '$old_id'";

  mysqli_query($conn, $sql_edit);
}

else if(isset($_POST['serial_number'])){
  $serial_number = $_POST['serial_number'];
  $controller_type = $_POST['controller'];
  $location = $_POST['location'];

  $sql_insert = "INSERT INTO devices (`Serial Number`, `mcu_type`, `location`) VALUES ('$serial_number', '$controller_type', '$location')";
  mysqli_query($conn, $sql_insert);
  $insert = true;
}

if(isset($_GET['edit'])){
  $SN = $_GET['edit'];
  $sql_select_data = "SELECT * FROM devices WHERE `Serial Number` = '$SN' LIMIT 1 ";

  $result = mysqli_query($conn, $sql_select_data);
  $data = mysqli_fetch_assoc($result);
}

$sql = "SELECT * FROM devices";
$result = mysqli_query($conn, $sql);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perangkat</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <?php
      if($insert == true){
        alertsSucces("Data Berhasil Di Tambahkan");
      }
        ?>

        <div class="row">
          <div class="col-lg-12">
          <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Perangkat Yang Terdaftar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Serial Number</th>
                    <th>Jenis Perangkat</th>
                    <th>Lokasi</th>
                    <th>Waktu</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){?>                    
                  <tr>
                    <td><?php echo $row['Serial Number'] ?></td>
                    <td><?php echo $row['mcu_type'] ?></td>
                    <td><?php echo $row['location'] ?></td>
                    <td><?php echo $row['created_time'] ?></td>
                    <td><?php echo $row['active'] ?></td>
                    <td><a href="?page=<?php echo $page ?>&edit=<?php echo $row['Serial Number'] ?> "><i class="fas fa-edit"></i></a></td>
                  </tr>
                  <?php } ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <?php
          if(!isset($_GET['edit'])) { ?>


          <div class="col-lg-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="?page=<?php echo $page ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Serial Number</label>
                    <input type="text" class="form-control"  placeholder="Serial Number Tidak Boleh Sama" name="serial_number" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kontroler</label>
                    <input type="text" class="form-control" name="controller" required>
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="location" required>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
              </div>            
          </div>

            <?php } else { ?>

          <div class="col-lg-12">
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="?page=<?php echo $page ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Serial Number</label>
                    <input type="hidden" name="edit_data" value="<?php echo $data['Serial Number'] ?>"> 
                    <input type="text" class="form-control" value="<?php echo $data['Serial Number'] ?>"  name="serial_number" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kontroler</label>
                    <input type="text" class="form-control" name="controller" value="<?php echo $data['mcu_type'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="location" value="<?php echo $data['location'] ?>" required>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <div class="input-group">
                    <select class="form-control" name="active">
                      <?php if($data['active'] == 'Yes') { ?>
                          <option value = "Yes">Aktif</option>
                          <option value = "No">Tidak Aktif</option>
                          <?php } else { ?>
                            <option value = "No">Tidak Aktif</option>
                            <option value = "Yes">Aktif</option>
                         <?php } ?>
                        </select>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Ubah</button>
                </div>
              </form>
              </div>            
          </div>

          <?php } ?>
                    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>