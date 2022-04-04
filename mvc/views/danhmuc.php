<?php
$db = new Database;
$db->connect();
$data = $db->getAllData("danhmucsanpham");

?>
<nav class="navbar navbar-expand-md navbar-dark bg-warning" aria-label="Fouth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Shop Sang Xịn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mbmd-0">

                <?php
                foreach ($data as $value) {
                ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=" Home/dmsp/<?php echo $value['Maloai'];?>"><?php echo $value['Tenloai']; ?></a>
                    </li>

                <?php
                }
                ?>
            </ul>
            <form>
                <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Search">
            </form>
        </div>
    </div>
</nav>