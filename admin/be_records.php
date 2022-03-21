<?php
	session_start();
    if(isset($_SESSION['email']))
    {
      $email = $_SESSION['email'];
      include 'variables.php';
    ?>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Announcements</title>
        <!-- Bootstrap core CSS -->        
        <link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css"></link>
        <link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
        <link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="../icon.ico" type="image/x-icon">
        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
        <script src="lib/js/wysihtml5-0.3.0.js"></script>
        <script src="lib/js/jquery-1.7.2.min.js"></script>
        <script src="lib/js/prettify.js"></script>
        <script src="lib/js/bootstrap.min.js"></script>
        <script src="src/bootstrap-wysihtml5.js"></script>

        <!-- Date picker JS-->
        <script>
            $(function() {
                var dateFormat = "dd-mm-yy",
                    from = $("#from")
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true

                    })
                    .on("change", function() {
                        to.datepicker("option", "minDate", getDate(this));
                    }),
                    to = $("#to").datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 3,
                        changeMonth: true,
                        changeYear: true
                    })
                    .on("change", function() {
                        from.datepicker("option", "maxDate", getDate(this));
                    });

                function getDate(element) {
                    var date;
                    try {
                        date = $.datepicker.parseDate(dateFormat, element.value);
                    } catch (error) {
                        date = null;
                    }
                    return date;
                }
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#record').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'print'
                    ]
                });
            });
        </script>
    </head>

    <body>
        <!-- Almost Common for Every Page -->
        <?php include'adminMenu.php' ?>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Announcements </h1>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </header>
        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Announcement</li>
                </ol>
            </div>
        </section>
        <?php include 'side-menu.php' ?>
        <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">Announcement</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form action="postannouncement.php" method="post" style="margin: 0 10px 0 10px;">
                            <div class="form-group">
                                <input type="hidden" name="author" value="<?php $_SESSION['accname']; ?>">
                                <label>Title</label>
                                <input type="text" name='title' placeholder="Title" class="form-control" style="margin-bottom: 10px">
                                <textarea id="some-textarea" placeholder="Enter info ..." name="body" class="form-control" style="width: 825px; height: 200px; margin-bottom: 10px;"></textarea>
                                <script type="text/javascript">
                                $('#some-textarea').wysihtml5();
                                </script>
                                <input class="btn btn-info" type="submit" name="info" value="Post">
                            </div>
                        </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </section>

        <?php
  }
else{
?>
<?php 
			echo "<script language='javascript'>alert('Login to continue');
			window.location.href='/shibat-students/admin';
			 </script>";
       
        } ?>