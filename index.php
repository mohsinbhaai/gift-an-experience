<?php $myVariable1 = "5";?>
<?php $myVariable2 = "10";?>
<?php $myVariable3 = "15";?>
<?php $myVariable4 = "20";?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nailspa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
        #myDIV {
            display: none;
        }

        #myDIV1 {
            display: none;
        }

        #myDIV2 {
            display: none;
        }

        #myDIV3 {
            display: none;
        }

        #myDIV4 {
            display: none;
        }
    </style>
</head>
<body>

<div class="container-fluid text-div-area">
    <div class="row">
        <div class="col-md-6 div-2">
            <h4>Corporate gifting</h4>
            <a href="">Enquiries</a>
        </div>
        <div class="col-md-6 div-1">
            <h4>Gift An Experience</h4>
            <!--<button><a href=""></a></button>-->
            <button onclick="myFunction()">View Gifts</button>
        </div>
    </div>
</div>

<div class="container mt-3" id="myDIV">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#home">All Experiences</a>
        </li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content container">
        <div id="home" class="container tab-pane active"><br>
            <div class="row">
                <div class="col-md-3">
                    <img src="http://cdn.shopify.com/s/files/1/0313/1965/products/truefitt-_-hilltruefitt_hill5386_medium.jpg?v=1407769954" class="img-fluid" alt="">
                    <p>Test 1</p>
                    <p>5rs </p>
                    <input type="hidden" name="text" value="<?php echo $myVariable1;?>">
                    <button type="submit">Submit</button>
                </div>
                <div class="col-md-3">
                    <img src="http://cdn.shopify.com/s/files/1/0313/1965/products/truefitt-_-hilltruefitt_hill5386_medium.jpg?v=1407769954" class="img-fluid" alt="">
                    <p>Test 2</p>
                    <p>£42.00</p>
                    <input type="hidden" name="text" value="<?php echo $myVariable2;?>">
                    <button type="submit">Submit</button>
                </div>
                <div class="col-md-3">
                    <img src="http://cdn.shopify.com/s/files/1/0313/1965/products/truefitt-_-hilltruefitt_hill5386_medium.jpg?v=1407769954" class="img-fluid" alt="">
                    <p>Test 3</p>
                    <form action="http://nailspaexperience.com/old-manish/App_Data/" method="post">
                        <p>£42.00</p>
                        <input type="hidden" name="text" value="<?php echo $myVariable3; ?>">
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <img src="http://cdn.shopify.com/s/files/1/0313/1965/products/truefitt-_-hilltruefitt_hill5386_medium.jpg?v=1407769954" class="img-fluid" alt="">
                    <p>Test 4</p>
                    <form action="http://nailspaexperience.com/old-manish/App_Data/" method="post">
                        <p>£32.00</p>
                        <input type="hidden" name="text" value="<?php echo $myVariable4;?>">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="display: none;" id="div1" class="targetDiv">book amazing nail service etur adipisicing elit. A aperiam commodi consectetur, consequatur cumque debitis eaque esse est iure, iusto mollitia nemo officia, quam quibusdam quos rem unde veritatis voluptates!</div>
                    <div style="display: none;" id="div2" class="targetDiv">book amazing hair spa  consectetur adipisicing elit. Laudantium minus omnis rerum. Et explicabo ipsam iste nostrum soluta? Ab, aut cumque error explicabo neque nulla quidem rerum tempora tenetur! Quas.</div>
                    <div style="display: none;" id="div3" class="targetDiv">book amazing manicure  consectetur adipisicing elit. Ad commodi consectetur consequatur cum ea, esse eveniet ex itaque laboriosam minus molestias officiis possimus quod rem repellat reprehenderit repudiandae sapiente unde?</div>
                    <div style="display: none;" id="div4" class="targetDiv">book amazing pedicure  consectetur adipisicing elit. Accusantium aut deserunt dicta est nemo nobis repellendus tempora! Ab eligendi, esse eum illum ipsa iusto, minus nesciunt praesentium repellendus, tempora vitae.</div>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });

    var x = document.getElementById('myDIV');
    function myFunction() {
        if (x.style.display === 'block') {
            x.style.display = 'none';
        } else {
            x.style.display = 'block';
        }
    }

    jQuery(function(){

        jQuery('.showSingle').click(function(){
            jQuery('.targetDiv').hide();
            jQuery('#div'+jQuery(this).attr('target')).show();
        });
    });
</script>

</body>
</html>