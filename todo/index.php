<?php
namespace Phppot;

use Phppot\Model\FAQ;
?>
<html>
<head>
<title>vt</title>
<link href="./assets/CSS/style.css" type="text/css" rel="stylesheet" />
<script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="./assets/js/inlineEdit.js"></script>
<style>
    .error{
    display: none;
    margin-left: 10px;
}       

.error_show{
    color: red;
    margin-left: 10px;
}

input.invalid, textarea.invalid{
    border: 2px solid red;
}

input.valid, textarea.valid{
    border: 2px solid green;
}

.invalid, .invalid{
    border: 2px solid red;
}

.valid, .valid{
    border: none;

}
#content { 
   //display: none;
     }
     #content1 { 
   display: none;
     }

     #content2 { 
   display: none;
     }

</style>
</head>
<body>
    
<h2>Contact us: </h2>

<input type="radio" id="show" name="show"  onclick="msg()"> all

<input type="radio" id="show1" name="show"  onclick="msg()"> Completed
<input type="radio" id="show2" name="show"  onclick="msg()"> Pending




<table class="summary-table filtered-table" width="800px" cellpadding="2" cellspacing="2" align="center">

  <form id="form" >
    <tr bgcolor="#cccccc" height="40px"  >
                    <td>Task 
                        <input type="text" name="name" id="name" placeholder="Project # To Do"  >
                        <span class="error">A valid task is required</span>
                    </td><br>
                     <td>user 
                        <input type="text" name="user" id="user" placeholder="user"  >
                        <span class="error">A valid user is required</span>
                    </td><br>
                    <td>status 
                        <select name="status" id="status">
                            <option value="Complete">Complete</option>
                           <option value="Pending">Pending</option>
                          

                        </select>
                       <br>
                    </td><br>


                    <td><button type="button" id="save" >add</button></td>

                </tr>
    
      
   
  </form>

</table>
<br/>

   
           <table class="tbl-qa" id="content" width="800px" cellpadding="2" cellspacing="2" align="center">
            <thead>
          <tr bgcolor="#cccccc">
               
                 <th class="table-header">ID</th>
                 <th class="table-header">Name</th>
                 <th class="table-header">User</th>
                 <th class="table-header">Status</th> 
                 <th class="table-header">Action</th> 
            </tr>
        </thead>
        <tbody>
<?php
require_once ("Model/FAQ.php");
$faq = new FAQ();
$faqResult = $faq->getFAQ();

foreach ($faqResult as $k => $v) {
    ?>


			  
                 <tr class="table-row" id="table-row-<?php 
                 echo $faqResult[$k]["id"]; ?>">
                 <td><?php echo  $faqResult[$k]["id"]; ?></td>


               
                <td id="name-<?php echo $faqResult[$k]["id"]; ?>"
                contenteditable="true"
                    onBlur="saveToDatabase(this,'name','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["name"]; ?></td>

                <td id="user-<?php echo $faqResult[$k]["id"];  ?>"
                    contenteditable="true"
                    onBlur="saveToDatabase(this,'user','<?php echo $faqResult[$k]["id"];?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["user"]; ?></td>


            <td id="status-<?php echo $faqResult[$k]["id"]; ?>"><?php

                    echo $faqResult[$k]["status"]; ?></td>

 <td><a class="ajax-action-links" onclick="deleteRecord(<?php echo $faqResult[$k]["id"]; ?>);">Delete</a></td>
            </tr>
		<?php
}
?>
		  </tbody>
    </table>




    <table class="tbl-qa" id="content1" width="800px" cellpadding="2" cellspacing="2" align="center">
            <thead>
          <tr bgcolor="#cccccc">
               
                 <th class="table-header">ID</th>
                 <th class="table-header">Name</th>
                 <th class="table-header">User</th>
                 <th class="table-header">Status</th> 
                 <th class="table-header">Action</th> 
            </tr>
        </thead>
        <tbody>
<?php
require_once ("Model/FAQ.php");
$faq = new FAQ();
$faqResult = $faq->getFAQ1();

foreach ($faqResult as $k => $v) {
    ?>


              
                 <tr class="table-row" id="table-row-<?php 
                 echo $faqResult[$k]["id"]; ?>">
                 <td><?php echo  $faqResult[$k]["id"]; ?></td>


               
                <td id="name-<?php echo $faqResult[$k]["id"]; ?>"
                contenteditable="true"
                    onBlur="saveToDatabase(this,'name','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["name"]; ?></td>

                <td id="user-<?php echo $faqResult[$k]["id"];  ?>"
                    contenteditable="true"
                    onBlur="saveToDatabase(this,'user','<?php echo $faqResult[$k]["id"];?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["user"]; ?></td>


            <td id="status-<?php echo $faqResult[$k]["id"]; ?>"><?php

                    echo $faqResult[$k]["status"]; ?></td>

 <td><a class="ajax-action-links" onclick="deleteRecord(<?php echo $faqResult[$k]["id"]; ?>);">Delete</a></td>
            </tr>
        <?php
}
?>
          </tbody>
    </table>


 <table class="tbl-qa" id="content2" width="800px" cellpadding="2" cellspacing="2" align="center">
            <thead>
          <tr bgcolor="#cccccc">
               
                 <th class="table-header">ID</th>
                 <th class="table-header">Name</th>
                 <th class="table-header">User</th>
                 <th class="table-header">Status</th> 
                 <th class="table-header">Action</th> 
            </tr>
        </thead>
        <tbody>
<?php
require_once ("Model/FAQ.php");
$faq = new FAQ();
$faqResult = $faq->getFAQ2();

foreach ($faqResult as $k => $v) {
    ?>


              
                 <tr class="table-row" id="table-row-<?php 
                 echo $faqResult[$k]["id"]; ?>">
                 <td><?php echo  $faqResult[$k]["id"]; ?></td>


               
                <td id="name-<?php echo $faqResult[$k]["id"]; ?>"
                contenteditable="true"
                    onBlur="saveToDatabase(this,'name','<?php echo $faqResult[$k]["id"]; ?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["name"]; ?></td>

                <td id="user-<?php echo $faqResult[$k]["id"];  ?>"
                    contenteditable="true"
                    onBlur="saveToDatabase(this,'user','<?php echo $faqResult[$k]["id"];?>')"
                    onClick="showEdit(this);"><?php 
                    echo $faqResult[$k]["user"]; ?></td>


            <td id="status-<?php echo $faqResult[$k]["id"]; ?>"><?php

                    echo $faqResult[$k]["status"]; ?></td>

 <td><a class="ajax-action-links" onclick="deleteRecord(<?php echo $faqResult[$k]["id"]; ?>);">Delete</a></td>
            </tr>
        <?php
}
?>
          </tbody>
    </table>


<script>
function msg() {
  //alert("Hello world!");
  if($("#show1").prop("checked")){
    
  $("#content1").show();
  $("#content").hide();
  $("#content2").hide();
} 

  if($("#show2").prop("checked")){
    
  $("#content2").show();
  $("#content").hide();
  $("#content1").hide();
} 
if($("#show").prop("checked"))
{
     $("#content").show();
      $("#content1").hide();
  $("#content2").hide();
}

}
</script>

     <script>
$('#save').click(function () {
$name = $('#name').val(); 
$user = $('#user').val(); 
$status = $('#status').val(); 




    var re = /^[0-9a-zA-Z]+$/;
    var is_name=re.test($('#name').val());
    if(is_name){ $('#name').removeClass("invalid").addClass("valid");}
    else{ $('#name').removeClass("valid").addClass("invalid");}

    var re = /^[a-zA-Z]+(\s[a-zA-Z]+)?$/;
    var is_user=re.test($('#user').val());
    if(is_user){ $('#user').removeClass("invalid").addClass("valid");}
    else{ $('#user').removeClass("valid").addClass("invalid");}

   
   

   
                  


if(is_name && is_user){
$.ajax({url:"insert.php",
method:"POST",
data:{namecol:$name,usercol:$user,statuscol:$status},
success:function(dataabc){
      console.log(dataabc);

        tableBody = $("#content");
      tableBody.append(dataabc);
    //alert(data);
    //$("#content").html(dataabc);  
 // window.location.href="index.php";
}});


}});

function deleteRecord(id) {

  //if(confirm("Are you sure you want to delete this row?")) {
        $.ajax({
            url: "delete.php",
            type: "POST",
            data:'id='+id,
            success: function(data){
              $("#table-row-"+id).remove();
            }
        });
  }
//}

</script>
</body>
</html>