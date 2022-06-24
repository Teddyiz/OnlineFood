<?php     
    try {
    include 'connection.php';
        
    $sql="INSERT INTO orders(first_name, last_name, email, address1, 
    address2, country, zipcode, cname, cardnumber) VALUES(?,?,?,?,?,?,?,?,?)";
    $sq= $db->prepare($sql);    
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $address1= $_POST['address1'];
    $address2= $_POST['address2'];
    $country= $_POST['country'];
    $zipcode= $_POST['zipcode'];
    $cname= $_POST['cname'];
    $cardnumber= $_POST['cardnumber'];
    
    echo "<script>
    alert('Checkout Complete');
    window.location.href='checkout.php';
</script>"; 
    if($sq->execute(array($first_name, $last_name, $email, $address1,
    $address2, $country,  $zipcode, $cname, $cardnumber))){        
    }
    else echo "FAILED";
} catch (PDOException $e) {
    echo $e->getMessage();
}
 $db=null;
?>