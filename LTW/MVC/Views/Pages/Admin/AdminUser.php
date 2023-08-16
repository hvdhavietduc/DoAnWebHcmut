<div class="manageUser">
    <div class="manageUser__title">
        <h4 class="manageUser__title-text"> Quản Lý Khách Hàng</h4>
    </div>
    <div class="manageUser__content">
    
        <div class="manageUser__content-bottom">
            <div class="grid">
                <div class="row">
                    <div class="l-12">
                    <div class="user-form">
                        <table class="user-form__table" >
                        
                            <thead>
                                <th class="ID">ID</th>
                                <th class="Name">Tên khách hàng</th>
                                <th class="Avatar">Avatar</th>
                                <th class="DoB">Ngày sinh</th>
                                <th class="Email">Email</th>
                                <th class="PhoneNumber">Số điện thoại</th>
                                <th class="Address">Địa chỉ</th>      
                                <th class="Feature">Tính năng</th>
                            </thead>
                            <tbody>
                               <?php
                                    $listUser=$data['listUser'];

                                    for($i=0;$i<count($listUser);$i++)
                                    {
                                        $id=$listUser[$i]['ID'];
                                        $name=$listUser[$i]['FirstName'].' '.$listUser[$i]['LastName'];
                                        $avatar=$listUser[$i]['Avatar'];
                                        $DoB=$listUser[$i]['DoB'];
                                        $Email=$listUser[$i]['AccountName'];
                                        $phone=$listUser[$i]['PhoneNumber'];
                                        $Address=$listUser[$i]['Address'];

                                        echo "
                                        <tr>
                                            <th>$id</th>
                                            <th>$name</th>
                                            <th><img src='$avatar' class='product-img'></th>
                                            <th>$DoB</th>
                                            <th class='email'>$Email</th>
                                            <th>0398841276</th>
                                            <th class='email'>$Address</th>
                                            <th>
                                                <button style=' text-decoration: none;' class='user-edit' href='#'>
                                                    <i class='edit-icon fa-solid fa-pen'></i>
                                                </button>
                                            "?>

                                                <a style=' text-decoration: none;' class='user-delete' href='./index.php?url=AdminUser/delete/ <?php echo $id?>'
                                                onclick="return confirm('Bạn có chắc muốn xóa khách hàng này không')">
                                                    <i class='delete-icon fa-solid fa-trash'></i>
                                                </a>                           
                                            </th>
                                        </tr>
                                        
                                    <?php }
                               
                               ?>

                               

                                   
                            </tbody>  
                            </table>
                        </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php /*
<div class="modal-error">
    <div class="modal__overlay"></div>
                
    <div class="modal__body-error">
        <div class="grid">                    
            <div class="row">
                <div class="form-group  l-12">
                <span class="canhbao">
                    <h5>CẢNH BÁO</h5>
                </span>
                </div>
            </div>
            <div class="row edit">
                <span class="question">
                    <h5 class="question1">Bạn có chắc muốn xóa khách hàng này không ?</h5>
                </span>
            </div>
            <br>
            <button class="btn btn-save" type="button">Xác nhận</button>
            <btton class="btn btn-cancel cancel-delete-product" data-dismiss="modal" href="#">Hủy bỏ</button>
            <br>
        </div>
        <br>
        <div class="bottom"></div>
    </div>
  
   
</div>
*/?>