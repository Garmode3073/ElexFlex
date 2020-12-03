<?php
require 'connect.php';
require 'filepath.php';

$query = 'SELECT * from product where sub_category="' . $_GET['sub-category'] . '"';


$designs = mysqli_query($connection, $query);
if (mysqli_num_rows($designs) == 0) {
    echo '<h1>ERROR! Currently, No such data available.</h1>';
}

?>



<head>
    <title><?php echo $_GET['sub-category'] . ' | ElexFlex' ?></title>
    <style>
        body {
            
            background-image: url("https://previews.123rf.com/images/tashatuvango/tashatuvango1603/tashatuvango160302250/54368250-e-shop-closeup-landing-page-in-doodle-design-style-on-laptop-screen-on-background-of-comfortable-wor.jpg");
        }

        img {
            background-color: rgba(255, 255, 255, 0.6);
            width: 300px;
            height: 190px;
            display: inline;
            float: left;
            padding: 1% 1%;
            padding-bottom: 20px;
            border-radius: 10px;
            transition: 0.4s;
        }

        .container {
            background-color: transparent;
            
            border-radius: 10px;
            padding: 1% 1%;
            min-height: 280px;
            margin: 1%;
        }

        .prod-name {
            margin: 1% 0% 0.7% 10%;

        }

        .prodinfo {
            vertical-align: text-top;
            min-width: 500px;
            padding: 10px 10px 10px 10px;
            border-radius: 10px;
            background-color: white;
            background-color: rgba(255, 255, 255, 0.6);
            box-shadow: 2px 2px 2px 2px;
            font-style: italic;


        }

       

        td.imgplace{
            width: 250px;
        }

        .listing {
            border-radius: 20px;
            padding: 10px 10px 10px 10px;
            width: 70%;
            min-height: 280px;
            border-radius: 10px;
            border-color: indigo;

        }

        img:hover {

            box-shadow: 2px 2px 5px 5px;
        }

        .imgplace {
            
            min-width: 250px;
            min-height: 200px;
            box-shadow: 2px 2px 2px 2px;
            padding: 10px 10px 10px 10px;
            border-radius: 10px;
            
        }
        input[type=submit]{
            font-weight: bolder;
        }
        .select:hover{
            box-shadow:
            0 0 5px 5px #000,  /* inner white */
            0 0 5px 5px rgb(250, 165, 165), /* middle magenta */
            0 0 5px 5px #0ff; /* outer cyan */
        }
        .select{
            background-color: green;
            font-size: 16px;
            font-family: 'Courier New', Courier, monospace;
            
        }
    </style>
</head>
<center>
<body>
    <?php
    if ($designs) {
        while ($row = mysqli_fetch_assoc($designs)) {
            $prod_query = 'SELECT * from product where prod_id = ' . $row['prod_id'];
            $prod = mysqli_query($connection, $prod_query);
            $prod_count = 0;
            if ($prod) {
                while ($prod_row = mysqli_fetch_assoc($prod)) {
                    $prod_count += 1;
                    if ($prod_count < 11) {
    ?>
                        <div class="container">
                           <!--<ul data-role="listview" data-filter="true"><li>-->
                            <table class="listing">
                                <tr>
                                    <td class="imgplace"><img src="<?php echo $prod_img_path . $prod_row['img'] ?>" /></td>
                                    <td class="prodinfo">
                                        <h1>Name: <?php echo $prod_row['name']; ?></h1>
                                        <h3>Price: <?php echo $prod_row['price']; ?> rs</h3>
                                        <input type="submit" class=select value="! SEE MORE" name="select">
                                    </td>
                                </tr>


                            </table>
                           <!-- </li>
                            </ul>-->
                        </div>
    <?php
                    }
                }
            }
        }
    }
    ?>
</body>
</center>

</html>