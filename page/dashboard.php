<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
          <div class="small-box bg-info">
              <div class="inner">
                <h3>29C</h3>

                <p>SUHU</p>
              </div>
              <div class="icon">
                <i class="fas fa-temperature-high"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
          <div class="small-box bg-indigo">
              <div class="inner">
                <h3>75%</h3>

                <p>KELEMBABAN</p>
              </div>
              <div class="icon">
                <i class="fas fa-water"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
          <div class="small-box bg-maroon">
              <div class="inner">
                <h3>20</h3>

                <p>POTENSIOMETER</p>
              </div>
              <div class="icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">KENDALI SERVO</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row margin">
                  <div class="col-sm-12">
                    <input id="servo" type="text" name="range_6" value="">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-lg-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">KENDALI LAMPU</h3>
              </div>
              <div class="card-body table-responsive pad">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-primary active">
                    <input type="radio" name="options" id="option_a1" autocomplete="off" checked> NYALA
                  </label>
                  <label class="btn btn-primary active">
                    <input type="radio" name="options" id="option_a2" autocomplete="off"> MATI
                  </label>
                </div>
              </div>
            </div>
            </div>
        </div>

        <div class="col-13">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Status Perangkat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Serial Number</th>
                      <th>Location</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>123</td>
                      <td>Bago</td>
                      <td>Online</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>