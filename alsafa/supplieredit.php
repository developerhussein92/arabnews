<?php
        include "header.php";
        if($_SESSION["mystatus"]!=0){
        if (isset($_POST['runedit']))
        {
               echo $id = $_POST['id'];
               $name =$_POST['name'];
               $code =$_POST['code'];
               $phone =$_POST['phone'];
               $fax =$_POST['fax'];
               $email =$_POST['email'];
               $address =$_POST['address'];
              
            $sql = 
            "
            UPDATE supplier
            SET name = '$name', code= '$code',phone = '$phone',fax =' $fax',email = '$email',address = '$address'
            WHERE id = '$id';
            "
            ;

            if ($conn->query($sql) === TRUE) {
                echo '
                            <script>
            
                            window.location.href = "supplierprocess.php";
                            </script>
            
                            ';
               
                echo '<div  id="test" class="alert alert-warning"  role="alert">
                تم الحفظ بنجاح 
         </div>  ';
            } else {
              
            }
        }

    if (isset($_POST['findhscode']))
    {
       
        $id = $_POST['findhscode'];
        
        $sql = "
        SELECT *
         FROM supplier
         WHERE id  = '$id'
        ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

?>


<div class="alert alert-danger"  role="alert">
تعديل المورد 
</div>

    <form method="POST" action="supplieredit.php">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white" class="input-group-text" id="basic-addon2">اسم المورد</span>
            </div>
            <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control btn-lg w-50" placeholder="ادخل اسم المورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>

        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white"  class="input-group-text" id="basic-addon2">CODE</span>
            </div>
            <input type="text" class="form-control btn-lg w-50"value="<?php echo $row['code'];?>" name="code" placeholder="ادخل كودالمورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>   
        
        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white"  class="input-group-text" id="basic-addon2">Phone</span>
            </div>
            <input type="text" class="form-control btn-lg w-50"value="<?php echo $row['phone'];?>" name="phone" placeholder="ادخل تليفون المورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>  

        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white"  class="input-group-text" id="basic-addon2">Fax</span>
            </div>
            <input type="text" class="form-control btn-lg w-50"value="<?php echo $row['fax'];?>" name="fax" placeholder="ادخل فاكس المورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>  

        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white"  class="input-group-text" id="basic-addon2">Email</span>
            </div>
            <input type="text" class="form-control btn-lg w-50"value="<?php echo $row['email'];?>" name="email" placeholder="ادخل ايميل المورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>  

        <div class="input-group mb-3 btn-lg w-50">
            <div class="input-group-append">
                <span style="background-color:black;color:white"  class="input-group-text" id="basic-addon2">Address</span>
            </div>
            <input type="text" class="form-control btn-lg w-50"value="<?php echo $row['address'];?>" name="address" placeholder="ادخل عنوان المورد" aria-label="Recipient's username" aria-describedby="basic-addon2">
        
        </div>  
        <button type="submit" name="runedit" class="btn btn-outline-success btn-lg w-50">حفظ التعديل</button>
    </form>

    

  <?php 
            }}}
        }else{
            echo ' <script> window.location.href = "index.php"; </script>';
          }
      include_once "footer.php";
    ?>