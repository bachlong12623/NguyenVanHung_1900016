<?php
class sptheoloai
{
    public function showsp($id)
    {

        $db = new Database;
        $db->connect();
        $data = $db->getAllDataById("sanpham", $id);
?>



        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php
                foreach ($data as $value) {
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="./public/images/<?php echo $value['hinhanh'] ?>">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div>
                                    <h2><?php echo $value['tensp']; ?></h2>
                                    <ul class="gia">
                                        <li id="giamoi" style=" width: 100px;
                                        height: 30px;
                                        text-align: center;
                                        padding: 10px 10px 0px 0px;
                                        border-radius: 20px;"><?php echo $value['giaban']; ?></li>
                                    </ul>
                                    <br>
                                    <ul class="mua" style="display: flex; margin-left: 20px;">
                                        <li id="muangay" style="width: 100px;
                                        height: 30px;
                                        text-align: center;
                                        padding: 10px 10px 0px 0px;
                                        background-color: rgb(28, 96, 241);
                                        border-radius: 9px;  
                                        list-style-type:none;"><a href="" style=" text-decoration: none;color:black;"> Mua Ngay</a></li>
                                        <li id="sosanh" style="width: 100px;
                                        height: 30px;
                                        text-align: center;
                                        padding: 10px 10px 0px 0px;
                                        background-color: rgb(146, 146, 146);
                                        margin-left: 10px;
                                        border-radius: 9px;
                                        list-style-type:none;
                                        "><a href="" style=" text-decoration: none;color:black;">So sánh</a></li>
                                    </ul><br>
                                    <ul class="xem">
                                        <li id="xem" style="  list-style-type:none;"><a href="" style=" text-decoration: none;color:red"> Xem chi tiết <span>Giảm</span></a></li>
                                    </ul>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color:burlywood; color:black">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color:coral;">Edit</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Mua ngay </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>

<?php
return "ok";
    }
}
?>