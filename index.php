<!DOCTYPE html>
<html>
  <head>
   <title>Pengirim Email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body>
   <div class="container">
    <div class="col-lg-8">
     <div class="page-header">
      <br>
      <h1>Website Pengirim Email</h1>
</div>
    <form action="proses.php" method="POST">
      <div class="form-group">
       <label>Nama Pengirim</label>
       <input type="text" name="name" id="name" class="form-control" required>
         </div>
         <div class="form-group">
       <label>Email Tujuan</label>
       <input type="email" name="email" id="email" class="form-control" required>
         </div>
         <div class="form-group">
       <label>Subject</label>
       <input type="text" name="judul" id="judul" class="form-control" required>
         </div>
         <div class="form-group">
       <label>Pesan</label>
       <textarea name="pesan" id="pesan" class="form-control" required></textarea>
         </div>
         <div class="form-group">
       <input type="submit" name="submit" value="Kirim" class="btn btn-success">
         </div>
        </div>
      </form>
    </div>
   </div>
  </body>
</html>