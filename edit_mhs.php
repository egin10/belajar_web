<?php
include('koneksi.php');
$nim = $_GET['nim'];
$query = mysql_query("SELECT * from data_mhs where nim ='$nim'");
$data = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit data</title>
  </head>
  <body>
    <h1>Form Edit Data</h1>
    <table>
      <form action="update.php" method="post">
        <tr>
          <td>Nama</td>
          <td>:<input type="text" name="nim" value="<?php echo $data['nim']?>"></td>
        </tr>
        <tr>
          <td>Nim</td>
          <td>:<input type="text" name="nim" value="<?php echo $data['nama']?>"></td>
        </tr>
          <td>Password</td>
          <td>:<input type="text" name="nim" value="<?php echo $data['password']?>"></td>
        </tr>
          <td>Semester</td>
          <td>:
            <select name="semester">
              <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                echo "selected";} ?> >Semester 1</option>

                <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                  echo "selected";} ?> >Semester 1</option>

                  <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                    echo "selected";} ?> >Semester 1</option>

                    <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                      echo "selected";} ?> >Semester 1</option>

                      <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                        echo "selected";} ?> >Semester 1</option>
                        
                        <option value="Semester 1" <?php if ($data['semester'] == 'Semester 1'){
                          echo "selected";} ?> >Semester 1</option>


            </select>
          </td>
        </tr>
        </tr>


      </table>
      </form>

  </body>
</html>
