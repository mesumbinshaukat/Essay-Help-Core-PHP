<?php
require_once('../../db_config/config.php');

if (!isset($_COOKIE["admin_login"]) && empty($_COOKIE["admin_login"])) {
    header("location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    <?php include "./partials/header.php" ?>

    <section>
        <div class="container-md mt-5">
            <h1 class="text-center">Queries</h1>
            <table class="table table-striped" id="registered_users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `tbl_contact`";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>ID_<?php echo $row["id"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <td><?php echo $row["message"] ?></td>
                        <td><?php echo $row["time_stamp"] ?></td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>





    <script>
    let table = new DataTable('#registered_users', {

        reponsive: true,
        scrollY: true,
        scroller: {
            displayBuffer: 20
        },
        ordering: true,
        lengthChange: true,
    });
    </script>
</body>

</html>