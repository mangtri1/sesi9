<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 5</title>
</head>
<body>
    
    <h3> input data</h3>
    <form>
        <div>
            nama lengkap
            <input type="texs" name="txNAMA" id="txNAMA">
        </div>

        <div>
            <button type="button" onclick="checkNama()">check Nama</button>
        </div>
    </form>

    <script>
        function checkNama(){
            let nm = document.getElementById("txNAMA").value;
            console.log("Isi field Nama:"+nm);
        }
    </script>
</body>
</html>