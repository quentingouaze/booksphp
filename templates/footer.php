<?php if(isset($_SESSION['storage'])){
?>
</main>
<footer>
<?php
echo "<a href='disconnect.php'><button>Deconnection</button></a>";
}
else{
    
    echo "<a href='?action=userLogin'>Login</a>";
}

?>
<?php echo $_SESSION['storage'];?>
</footer>
</body>
</html>