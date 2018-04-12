<?php
require_once '../Database.php';
require_once '../user_Assign.php';

$ap = new User_Assign();
$id = (int)$_POST["id"];
$Tester = $ap->getUnassignedTester(Database::getDb(),$id);
$Tester2 = $ap->getassignedTester(Database::getDb(),$id);
?>
<input type="hidden" value="<?= $id ?>" name="pid" id="pid">
<h2>Assigned</h2>
<ul id="assigned"></ul>
<h2>Unassigned</h2>
<ul id="unassigned"></ul>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var pid = $("#pid").val();
        $("#assigned").load('assignedUsers.php',{'id':pid});
        $("#unassigned").load('UnassignedUsers.php',{'id':pid});
        $(document).on('change','.checkbox',function () {
            //alert("hello");
            var pid = $("#pid").val();
            var userid = $(this).val();

            if(this.checked){
                //alert("hi");
                $.ajax({
                    url: 'assignUsers.php',
                    data: {
                        projectid:pid,
                        userid:userid,
                        action:"add"
                    },
                    success: function () {

                    },
                    dataType: 'json',
                    type: 'POST'
                });
                $("#assigned").load('assignedUsers.php',{'id':pid});
                $("#unassigned").load('UnassignedUsers.php',{'id':pid});


            }else {
               // alert("hello");
                $.ajax({
                    url: 'assignUsers.php',
                    data: {
                        projectid:pid,
                        userid:userid,
                        action:"remove"
                    },
                    success: function () {

                    },
                    dataType: 'json',
                    type: 'POST'
                });
                $("#assigned").load('assignedUsers.php',{'id':pid});
                $("#unassigned").load('UnassignedUsers.php',{'id':pid});
            }
        });
    });
</script>




