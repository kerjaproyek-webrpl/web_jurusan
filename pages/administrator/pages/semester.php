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
<h3><span><i class="glyphicon glyphicon-th-list"></i> Data Semester</span></h3>
<button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add New</button>
<div class="fw-container">
  <div class="fw-body">
    <div class="content">
      <div id="example_wrapper" class="dataTables_wrapper">
        <table id="example" class="table table-bordered table-striped table-hovered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Huruf</th>
                <th>Romawi</th>
                <th>Akronim</th>
                <th>keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>61</td>
                <td>
                  <a class="btn btn-circle btn-primary"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>61</td>
                <td>47</td>
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
