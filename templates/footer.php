<?php if(!isset($SESSION)){

echo "<a href='disconnect.php'><button>Deconnection</button></a>";
}
else{
    
    echo "<a href='?action=userLogin'>Login</a>";
}

?>

</body>
</html>