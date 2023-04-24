<?php
// include 'connection.php';
$chapters_dict=$conn->query("select chapters from chapter");
?>
<div id="option_area">

                <div class="close_nav">
                    <span onclick="closenav()">X</span>
                </div>
                <div class="user_detail">
                    <div class="profile_img"><img src="<?php echo $row["pic"]?>" alt="profile pic"></div>
                    <div><h6><?php echo $row["fname"]?></h6></div>
                    <div><p><?php echo $row["roll_no"]?></p></div>
                </div>

                <div class="options">
                    <button class="dropdown-btn">HOME
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="dashboard.php">HOME</a>
                        <?php if(substr($_SESSION["roll_no"],0,2)=="FC"){?>
                        <a href="attendance.php">Attendance</a>
                        <?php }?>
                        <a href="timetable.php">Timetable</a>
                        <a href="logout.php">Logout</a>
                    </div>

                        <button class="dropdown-btn">COURSE FILES
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                    
                    <a href="front_page.php">Front Page</a>
                        <a href="index_page.php">Index</a>
                        <?php while($chapter=$chapters_dict->fetch_assoc()){?>
                            <a href="<?php echo $chapter['chapters'].'.php';?>"><?php echo $chapter['chapters'] ?></a>
                        <?php } ?>
                    </div>
                    <?php if($row['role']!="faculty"){?>
                    <button class="dropdown-btn">MODIFY USER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="add_user.php">Add User</a>
                        <?php if($row['role']==="superadmin"){?>
                        <a href="#">Delete User</a>
                        <?php }?>
                        <a href="#">Modify User</a>
                    </div>
                    <?php }?>
                    <?php if($row['role']=="superadmin"){?>
                    <button class="dropdown-btn">SHOW USER
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="show_users.php">Show all users</a>
                        <a href="#">show by faculty id</a>
                        <a href="#">Show HOD's</a>
                    </div>
                    <?php }?>
                   
                    <button class="dropdown-btn">POSTS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="certificates.php">Certificates</a>
                        <a href="book.php">Books/Book Chapter</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>