<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['buy']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems = array_column($_SESSION['cart'], 'name');
            if (in_array($_POST['name'], $myitems))
            {
                echo "<script>
                    alert('Order already added');
                    window.location.href='food.php';
                </script>";
            }
            else{
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count]= array('name'=>$_POST['name'],'price'=>$_POST['price'],'Quantity'=>1);

            echo "<script>
                    alert('Order added');
                    window.location.href='food.php';
                </script>";
                
            }
        }
        else 
        {
            $_SESSION['cart'][0]= array('name'=>$_POST['name'],'price'=>$_POST['price'],'Quantity'=>1);
            echo "<script>
                    alert('Order added');
                    window.location.href='food.php';
                </script>";
        }
    }   
    // remove
    if(isset($_POST['remove']))
    {
        foreach ($_SESSION['cart'] as $key => $value) 
        {
            if ($value['name']==$_POST['name']) 
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                    alert('Order Removed');
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['update'])){
        $newquan=$_POST['updatequan'];
        echo $newquan;
        foreach ($_SESSION['cart'] as $key => $value){
            $value['Quantity']=$newquan;
            $value['price']=$value['Quantity']*$value['price'];
         $_SESSION['cart'][$key]['Quantity']=$value['Quantity'];
          // $_SESSION['cart'][$key]['price']+=$value['price'];
            
    echo $value['Quantity'];
  header('location:cart.php');
        }
                    
    } 
}
?>