<?php

$listImg = [
    'https://th.bing.com/th/id/OIP.9q_ferGvzZnY_26XCsA5-wHaE_?pid=ImgDet&rs=1',
    'https://i.pinimg.com/originals/ac/85/61/ac8561c0cc10059f18e128b851c97f41.jpg',
    'https://cdn.weartesters.com/wp-content/uploads/2013/06/Meet-The-Nike-CJ81-Calvin-Johnsons-First-Signature-Trainer-13.jpg',
    'https://i.pinimg.com/originals/de/fe/2d/defe2de4b3b065ed493ab2b14e7d8589.jpg'
]

    ?>

<div class="HomePage">
            <div class="content-main">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-65">
                            <div class="main__commercial">                  
                                <img class="commercial-img img--active" src=" <?php echo $listImg[0] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[1] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[2] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[3] ?>">
                            </div>
                        </div>
                        <div class="grid__column-35">
                            <div class="main__beside">
                                <div class="main__beside-1">
                                    <img class="beside-1-img" src='https://th.bing.com/th/id/R.9d9b7dd0facd55d1ee8ba37ffa60f763?rik=yoURXJ4COEK05A&pid=ImgRaw&r=0'>
                                </div>
                                <div class="main__beside-2">
                                    <img class="beside-2-img" src='https://th.bing.com/th/id/OIP.eFv16WMwjN4pN7Xm5KrIeAHaHa?pid=ImgDet&w=640&h=640&rs=1'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-product">
                <div class="grid">
                    <div class="product__heading">SẢN PHẨM NỔI BẬT</div>
                    <div class="grid__row">
                        <?php
                        require "./MVC/Views/Module/Product.php";
                        $listProduct=$data['listProduct'];
                        for ($i=0;$i<4;$i++)
                          { 
                            $props=$listProduct[$i];
        
                            echo "<div class='l-3 m-6 c-12 center'>";
                            Product($props);  
                            echo "</div>";
                          } 
                        ?>
                    </div>
                </div>
                
                
            </div>
            <div class="content-accessory">
                <div class="grid">
                    <div class="accessory__heading">SẢN PHẨM BÁN CHẠY</div>
                    <div class="grid__row">
                        <?php
                       $listProduct=$data['listProduct'];
                       for ($i=4;$i<12;$i++)
                         { 
                           $props=$listProduct[$i];
       
                           echo "<div class='l-3 m-6 c-12 center'>";
                           Product($props);  
                           echo "</div>";
                         } 
                       ?>
                        
                    </div>
                </div>
            </div>
            <div class="content-accessory">
                <div class="grid">
                    <div class="accessory__heading">SẢN PHẨM SALES CHẠY NHẤT THÁNG</div>
                    <div class="grid__row">
                        <?php
                       $listProduct=$data['listProduct'];
                       for ($i=12;$i<20;$i++)
                         { 
                           $props=$listProduct[$i];
       
                           echo "<div class='l-3 m-6 c-12 center'>";
                           Product($props);  
                           echo "</div>";
                         } 
                       ?>
                    </div>
                </div>
            </div>
</div>