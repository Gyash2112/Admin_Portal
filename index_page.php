<?php
include 'connection.php';
// $subject_alloted=$conn->query("select c_id from course_allocation where roll_no='{$_SESSION['roll_no']}'");
// $roww=$subject_alloted->fetch_assoc();
// $subject_details=$conn->query("select * from course_file where c_id='{$roww['c_id']}'");
// $roww=$subject_details->fetch_assoc();
$tchapter=$conn->query("select chapters,content from chapter");
$modal2_dict=$conn->query("select * from chapter");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <!-- <link rel="stylesheet" href="css/certificates.css"> -->
    <link rel="stylesheet" href="css/index_page.css">
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    <div class="modal_sec" id="modal_sec">
        <div class="modal" id="modal1">
            <form action="insert_chap.php" method="post">
            <h1>ADD CHAPTER</h1>
                <div class="form-group">
                    <textarea name="content" cols="15" rows="5" placeholder="Enter Content"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Submit">
                    <input type="button" value="Cancel" onclick="exit()">
                </div>
            </form>
        </div>
        <div class="modal" id="modal2">
            <form action="delete_chap.php" method="post">
            <h1>Delete CHAPTER</h1>
                <select name="chap_no" id="chap_no">
                    <?php while($modal2=$modal2_dict->fetch_assoc()){?>
                        <option value="<?php echo $modal2['sno'] ?>"><?php echo $modal2['chapters'] ?></option>
                        <?php }?>
                </select>
                <div class="submit">
                    <input type="submit" value="Submit">
                    <input type="button" value="Cancel" onclick="exit2()">
                </div>
            </form>
        </div>
    </div>
    <div class="container" id="container">
        <?php include 'navbar.php';?>
        <main>
            <?php include 'sidenav.php'?>

            <div class="dashboard">
            <div class="hamburger">
                    <button onclick="opennav()"><img src="https://img.icons8.com/puffy/32/000000/experimental-menu-puffy.png"/></button>
            </div>
                <div class="block">
                    <div class="header">
                        <h1>Front Page</h1>
                    </div>

                    <hr>

                    <ul id="chapters">
                    <?php while($chapters=$tchapter->fetch_assoc()){?><li class="chapter" style="list-style:none;"><?php echo $chapters['chapters'].'-> '.$chapters['content'];?>
                    <?php
                    $chapter_name=$chapters['chapters'];
                    $status_of_completion_dict=$conn->query("select 
                    CASE 
                    when EXISTS (select 1 from status_ch_completion where chapters= '$chapter_name' and roll_no='{$_SESSION['roll_no']}' ) then 1
                    else 0
                    END as counted
                    from status_ch_completion;");
                    $status_of_completion=$status_of_completion_dict->fetch_assoc();
                    if($status_of_completion['counted']==1){ ?>
                    <img src="https://img.icons8.com/emoji/48/null/check-mark-button-emoji.png"/>
                         <?php }?>
                        <?php }?>
                    </li>
                    </ul>

                    <?php if($row['role']==="superadmin"){?>
                    <div class="button_div">
                        <button onclick="add_chapter()">ADD CHAPTER</button>
                        <button onclick="delete_chapter()">Delete Chapter</button>
                        <button>Edit chapter</button>
                    </div>
                    <?php }?>
                </div>

                
            </div>
        </main>
    </div>
    <script src="js/sidenav.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="js/pdf.js"></script>
    <script>
        document.getElementById("exit").addEventListener('click',()=>{
        //     document.getElementById("container").style.opacity="0";
        // document.getElementById("modal_sec").style.display="none";
        // document.getElementById("modal_sec").style.zIndex="0";

        });
        function add_chapter(){
        document.getElementById("container").style.opacity="0.6";
        document.getElementById("modal_sec").style.display="flex";
        document.getElementById("modal_sec").style.zIndex="100";
        document.getElementById("modal1").style.display="flex";
        }

        function exit(){
            document.getElementById("container").style.opacity="1";
        document.getElementById("modal_sec").style.display="none";
        document.getElementById("modal_sec").style.zIndex="0";
        document.getElementById("modal1").style.display="none";
        }

        function delete_chapter(){
            document.getElementById("container").style.opacity="0.6";
        document.getElementById("modal_sec").style.display="flex";
        document.getElementById("modal_sec").style.zIndex="100";
        document.getElementById("modal2").style.display="flex";
        }

        function exit2(){
            document.getElementById("container").style.opacity="1";
        document.getElementById("modal_sec").style.display="none";
        document.getElementById("modal_sec").style.zIndex="0";
        document.getElementById("modal2").style.display="none";
        }
    </script>
</body>
</html>