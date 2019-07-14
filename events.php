<?php
    if(isset($_GET['S37KoHcn5WJIR6OXKFNo1Q'])){
        $id = $_GET['S37KoHcn5WJIR6OXKFNo1Q'];
        
        switch($id){
            case "G2SUY":
                $event = "Birthday Party";
                break;
            case "G3SUY":
                $event = "College Events";
                break;
            case "E8DBo":
                $event = "Special Events";
                break;
            case "E8DBp";
                $event = "Day Celebration";
                break;
            case "jTRyGS07":
                $event = "Marriage";
                break;
            case "jTRyGS08":
                $event = "Family Function";
                break;
            default:
                $event = "";
        }
    }
?>
<?php
    include"include/nav.php";
?>
    
<div class="page_back">

<!--  Don't touch class page_back  -->
    
    <div class="container-fluid">
        <div class="text-center text-white mb-2">
            <h2 class="display-4 h2">Book Event : <?php echo $event; ?></h2>
        </div>
        <div class="row pt-5">
            <div class="col-1">
            </div>
            <div class="col-10 align-content-center">
                <div class="back_side">
                    <div class="back_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="front_content">
                                    <form action="" method="post">
                                        
                    <div class="input-group m-1 p-1">
                        <span class="input-group-addon mx-1 px-1"><i class="fa fa-calculator"></i></span>
                        <input type="text" class="form-control" id="upass" name="upass" placeholder="No of Guest" required="">
                    </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">  
            </div>
        </div>
    </div>

</div> 
    
<?php
    include"include/footer.php";
?>