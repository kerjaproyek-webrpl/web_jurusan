<!DOCTYPE html>
<html>
<head>
  <!-- CSS -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <style type="text/css">
    div.container {
        width: 80%;
    }
  </style>
</head>
<body>
<h3><span><i class="glyphicon glyphicon-th-list"></i> Data Berkas Siswa</span></h3>
<a href="form-berkas.php"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add New</button></a>
<div class="fw-container">
  <div class="fw-body">
    <div class="content">
      <div id="example_wrapper" class="dataTables_wrapper">
        <table id="example" class="table table-bordered table-striped table-hovered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NISN</th>
                <th>File Foto</th>
                <th>File SKHUN</th>
                <th>File Ijazah</th>
                <th>File Gaji</th>
                <th>File Lain</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
                <td>
                  <a class="btn btn-circle btn-primary"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
                <td>
                  <a class="btn btn-circle btn-primary"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
</table>
      </div>
    </div>
  </div>
</div>



<!-- data tabel -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        //"pagingType": "full_numbers"
    } );
} );
</script>
</body>
</html>
