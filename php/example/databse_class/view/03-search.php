<?php
include_once('C:\laragon\www\learn\php\example\databse_class\01-define.php');

if (isset($_GET['main-search'])) {

    $search = trim($_GET['main-search']);
    $query_search = "SELECT * FROM `mssv` WHERE `name` LIKE '%$search%'";
    $conn->result_query($query_search);
    $result = $conn->result;
    while ($rows = mysqli_fetch_assoc($result)) {
           $name = $rows['name'];
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Thuc hanh Class Database</title>
    <style>
        .main {
            width: 400px;
            height: 200px;
            margin: 10px auto;
            border: 2px solid #ccc;
            text-align: center;
        }

        input {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="search-area">
            <form method="get">
                <input type="text" name="main-search" value="<?php echo isset($search) ? $search : "" ?>" />
                <button type="submit" name="submit">Button</button>
            </form>
            <div class="error-erea">
                <p><?php echo isset($error) ? $error : "" ?></p>
            </div>
            <div>
                <?php echo isset($name)? $name : ""?>
            </div>
        </div>
    </div>
</body>

</html>