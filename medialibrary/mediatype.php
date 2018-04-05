<?php 
include './includes/header.php';
?>
    <body>
        <div class="container">
            <header>
                <div class="row" style="background-color: #113;">
                    <div class="col-md-12">
                        <a href="./index.html">
                            <h2 class="text-info">
                                <span class="glyphicon glyphicon-king" style=""></span>
                                MEDIA Library - <?php echo $page_title;?>
                            </h2>
                        </a>
                    </div>
                </div>
            </header>
            <div class="clearfix">&nbsp;</div>
            <div class="row">
                <?php 
                include './includes/leftnav.php';
                ?>
                <div class="col-md-9">
                    <!--Main content-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="well well-lg" style="text-align: center;">
                                <a href="mediaview.html">
                                    <span class="glyphicon glyphicon-film" style=" font-size: 4em"></span>
                                    <br />
                                    <h4>Video 1</h4>
                                </a>
                                <div class="row">
                                    <a href="edit.html" class="btn btn-xs btn-primary">Edit 
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete.html" class="btn btn-xs btn-danger">Delete 
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well well-lg" style="text-align: center;">
                                <a href="mediaview.html">
                                    <span class="glyphicon glyphicon-film" style=" font-size: 4em"></span>
                                    <br />
                                    <h4>Video 2</h4>
                                </a>
                                <div class="row">
                                    <a href="edit.html" class="btn btn-xs btn-primary">Edit 
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete.html" class="btn btn-xs btn-danger">Delete 
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="well well-lg" style="text-align: center;">
                                <a href="mediaview.html">
                                    <span class="glyphicon glyphicon-film" style=" font-size: 4em"></span>
                                    <br />
                                    <h4>Video 3</h4>
                                </a>
                                <div class="row">
                                    <a href="edit.html" class="btn btn-xs btn-primary">Edit 
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="delete.html" class="btn btn-xs btn-danger">Delete 
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>