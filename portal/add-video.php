<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
 
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add Video Management</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Videos</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
                <div class="card">
                    <div class="card-title">
                       
                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/addvideos.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Video Title</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="videotitle" placeholder="Video Title" name="videotitle"  required="" pattern="^[a-z A-z]+$"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categories" name="categories">
                                                <option value="">~~SELECT~~</option>
                                                <?php 
                                                    $sqlvdo = "SELECT * FROM crmvideocategory";
                                                    $result = $connect->query($sqlvdo);
                                                    while($row = $result->fetch_array()) {
                                                        echo "<option value='".$row['id']."'>".$row['category']."</option>";
                                                    } // while
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Video Details</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="videodetail" style="height:150px" cols="10" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Video URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="vurl" placeholder="Video URL" name="vurl" required=""/>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include('./constant/layout/footer.php');?>
