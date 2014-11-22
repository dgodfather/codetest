<?php
/*
 * PHP II program using AJAX
 *  */
require_once('includes/dbConnection.php');
?>

<?php include "includes/header.php"; ?>  <!-- header include file -->

<script>
    function getData() {
       var url = "getData.php";   // set URL
	   var id=document.getElementById('destination').value;  // get id from the input box
       $("#mydata").load(url, "destination="+id); // request data, insert into division
    }
    
</script>

    <div id="main">
        <div id="content">
            <h3>Enter a Destination</h3>
            <form>
                <input type="text" id="destination">&nbsp;<label>Enter Destination</label>
                <p><input type="button" value="get travel data" onclick="getData()">
            </form>
            
            <div id="mydata" style='height: 100px'></div>   
         
        </div> <!-- end id=content -->
    </div> <!-- end id=main -->

 <?php include "includes/footer.php"; ?>   <!-- footer include file -->
