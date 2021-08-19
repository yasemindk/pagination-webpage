<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAGİNATİON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<style>
  body{
    background-color: lightblue;
  }
  .row {
      margin-top: 15px;
  }
  table{
    margin-left: 10%;
    margin-top: 25px;
     width: 80%;
     font-family: 'Montserrat', sans-serif;
     border: 3px solid black;
  }

  table td {
    text-align: center;
    background-color:#ccc;
    color:blue;
    /* sadece baş harfler büyük olur */
    text-transform: capitalize;
    font-weight: bold;
    border: 1px solid black;
    font-size: 20px;
  }

  table th {
        border: 1px solid white;
  }

  table thead {
     text-align: center;
     background-color:#515459;
     color:#fff;
     font-size: 25px;
  }

</style>

  </head>
  <body>

    <?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pagination");
    ?>

<table table border="1" cellpadding="10">

      <thead>
        <tr>
            <th>İSİM</th>
            <th>SOYİSİM</th>
            <th>MESLEK</th>
            <th>YAŞ</th>
        </tr>
      </thead>
<tbody>


        <?php
                    $sql = "SELECT * FROM pagi";
                    $result = mysqli_query($conn,$sql);
                    $results_per_page = 5;
                    $number_of_results = mysqli_num_rows($result);
                    $number_of_pages = ceil($number_of_results/$results_per_page);//kaç sayfa olcak
                    // $page = empty($_GET["page"]) ? 1 : $_GET["page"]
                    if (!isset($_GET['page'])) {
                      $page = 1;
                    }else {
                      $page = $_GET['page'];
                    }
                    $this_page_first_result = ($page-1)*$results_per_page;//kaçtan başlıyor

                    $sql = "SELECT * FROM pagi LIMIT " . $this_page_first_result . ',' . $results_per_page;//limit belirleme görülcek datalar için
                    $result = mysqli_query($conn, $sql);

                    //row içine aktarma verileri
                    while ($row=mysqli_fetch_array($result)){

                        $ad = $row['user_names'];
                        $soyad = $row['user_surnames'];
                        $meslek = $row['user_job'];
                        $yas = $row['user_age'];
                        echo "<tr>
                        <td>$ad</td>
                        <td>$soyad</td>
                        <td>$meslek</td>
                        <td>$yas</td>
                    </tr>";
                    }
       ?>
</tbody>
</table>
<div class="row">
  <nav aria-label="Page navigation example">
    <ul class="pagination pagination-lg  justify-content-center">
    <?php
    // geri tuşu
      if ($page > 1) {
        $newpage = $page - 1;
        echo '<li class="page-item"><a class="page-link" href="http://localhost/pagination/tablo.php?page='.$newpage.'">Geri</a></li>';
      }else {
        echo '<li class="page-item disabled"><a class="page-link" href="javascript:void(0)">Geri</a></li>';//bootstrap inaktif disabled, javascript:void(0) tıklanamaz olur.
      }
      // sayfalar
      $record = 2;
      for ($i=$page-$record; $i<=$page+$record ; $i++) {//i den önceki ve sonraki iki sayfayı göster
        if ($i>0 and $i<=$number_of_pages) {
          if ($i == $page) {
            echo '<li class="page-item active"><a class="page-link" href="http://localhost/pagination/tablo.php?page='.$i.'">'.$i.'</a></li>';
          }else {
            echo '<li class="page-item"><a class="page-link" href="http://localhost/pagination/tablo.php?page='.$i.'">'.$i.'</a></li>';
          }
        }
      }
      // ileri tuşu
      if ($page != $number_of_pages) {
        $newpage = $page + 1;
        echo '<li class="page-item"><a class="page-link" href="http://localhost/pagination/tablo.php?page='.$newpage.'">İleri</a></li>';
      }else {
        echo '<li class="page-item disabled"><a class="page-link" href="javascript:void(0)">İleri</a></li>';//bootstrap inaktif disabled, javascript:void(0) tıklanamaz olur.
      }
     ?>
    </ul>
</nav>
</div>
<script type="text/javascript" src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
