<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h2 style="text-align: center;">Nilai Mahasiswa</h2>
<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="form-floating mb-3">
            <input class="form-control" name="namaMahasiswa" type="text" placeholder="Nama Mahasiswa" data-sb-validations="required" />
            <label for="namaMahasiswa">Nama Mahasiswa</label>
            <div class="invalid-feedback" data-sb-feedback="namaMahasiswa:required">Nama Mahasiswa is required.</div>
        </div>
        <?php
          $matkul =[
            "Matematika" => "MTK",
            "inggris" => "ING",
            "Program web" => "WEB",
            "UI/UX" => "UI&UX",
            "kewarganegaraan" => "PKN",
          ] 
        ?>
        <div class="form-floating mb-3">
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
              <?php
              foreach ($matkul as $key => $value) {
                echo "<option value='$value'>$key</option>";
              }
              ?>  
            </select>
            <label for="mataKuliah">Mata Kuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiTugas" type="text" placeholder="Nilai Tugas" data-sb-validations="required" />
            <label for="nilaiTuigas">Nilai Tuigas</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiTuigas:required">Nilai Tuigas is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUts" type="text" placeholder="Nilai UTS" data-sb-validations="required" />
            <label for="nilaiUts">Nilai UTS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" name="nilaiUas" type="text" placeholder="Nilai UAS" data-sb-validations="required" />
            <label for="nilaiUas">Nilai UAS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS is required.</div>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>

<div class="container px-5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered" style="text-align: center;">
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Matkul</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                </tr>
                <?php
                    if (isset($_POST['submit'])) {
                        echo "<tr>";
                        echo "<td>1</td>";
                        echo "<td>" . $_POST["namaMahasiswa"] . "</td>";
                        echo "<td>" . $_POST["mataKuliah"] . "</td>";
                        echo "<td>" . $_POST["nilaiTugas"] . "</td>";
                        echo "<td>" . $_POST["nilaiUts"] . "</td>";
                        echo "<td>" . $_POST["nilaiUas"] . "</td>";
                        echo "</tr>";
                    }
                ?>
        </table>
    </div>
</div>
</body>
</html>