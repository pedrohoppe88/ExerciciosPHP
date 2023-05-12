<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms Boostrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            .col-sm-12{
                border: 1px solid green;
            }
            
            .form-control input {
                
                
            }
            
            
        </style>
    </head>
    <body>
        <div class="container">
            <form>
                <div class="row page-header">
                    <div class="col-sm-12">
                        <h1>Menu</h1> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="matricula">matricula:</label>
                            <input type="number" class="form-control" id="matricula">
                        </div>
                        <div class="form-group">
                            <label for="nome">nome:</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
                
                
                <div class="form-group">
                    <label>Turmas</label> 
              <div class="radio">
              <label><input type="radio" name="optradio" checked>423</label>
              <label><input type="radio" name="optradio" checked>413</label>
              <label><input type="radio" name="optradio" checked>433</label>
            </div>
                    
            <div class="radio">
              <label><input type="radio" name="optradio">412</label>
              <label><input type="radio" name="optradio">422</label>
              <label><input type="radio" name="optradio">432</label>
            </div>


            </form>
                </div>
        </div>

    </body>
</html>
