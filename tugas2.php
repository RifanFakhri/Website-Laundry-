<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <style>
        body{
            background-color: antiquewhite;
        }
        .form-data{
            background-color: white;
            width: 400px;
            height: 400px;
            padding: 100px 30px;
            margin-top: 100px;
            border-radius: 20px;
            margin-left: 450px;
        }
        .form-data h1{
            font-size: 20px;
            margin-top: -90px;
            text-align: center;
        }
    </style>
    <body>
        <div class="form-data">
            
                <div class="mb-3">
                    <h1>tugas 2</h1>
                    <form action="proses.php" method="POST">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" style="width: 300px;" id="nama" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                  <label for="exampleInputEmail1" class="form-label">kelas</label>
                  <input type="text" name="kelas" class="form-control" style="width: 300px;" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nilai</label>
                  <input type="number" name="nilai" class="form-control" style="width: 300px;" id="exampleInputPassword1">
                </div>
                <input type="submit" class="btn btn-primary" value="simpan"></input>
             
        </div>
        </form>
    </body>
</html>