<?php include "head_nav.php";

// if find button pushed...
if(isset($_POST['find_location']))
    
{

$location=$_POST['location'];

if ($location=="Home")
    
{
    
$find_sql="SELECT *
FROM `2020_L1_Assessment_Food_Reviews`
WHERE `Location` LIKE 'home' ORDER BY `2020_L1_Assessment_Food_Reviews`.`Name` ASC ";

}
    
elseif ($location=="Away")

{
$find_sql="SELECT *
FROM `2020_L1_Assessment_Food_Reviews`
WHERE `Location` NOT LIKE 'home' ORDER BY `2020_L1_Assessment_Food_Reviews`.`Name` ASC ";
    
}
    
    

$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>
        <div class="box main">
            
            <h2>Location Search</h2>
            
            <?php
            
            // check if there are any results
            
            if ($count<1)
            
            {
                
            ?>
                
            <div class="error">
                Sorry, we couldn't find any matches. Please use the search box in the sidebar to try again.
                
            </div>
            
            <?php
            
            } // end count 'if'
            
            // if there are not results, output an error
            
            else {
                
                do {
                    
                ?>
            
            <!-- Results go here -->
            <div class="results">
                
                <p>Food: <span class="sub_heading"><?php echo $find_rs['Name']; ?></span></p>
                
                <p>Meal Time: <span class="sub_heading"><?php echo $find_rs['Meal Time']; ?></span></p>
                
                <p>Location: <span class="sub_heading"><?php echo $find_rs['Location']; ?></span></p>
                
                <p>Is this meal vegetarian friendly? <span class="sub_heading"><?php echo $find_rs['Vegetarian']; ?></span></p>

                <p>Rating: <span class="sub_heading">
                    
                    <?php 
                    
                    for ($x=0; $x < $find_rs['Rating']; $x++)
                    
                    {
                        echo "&#9733;";
                    }
                    
                    ?>
                </span></p>
                
                <p><span class="sub_heading">Review / Response</span></p>
                
                <p>
                    <?php echo $find_rs['Review']; ?>
                    
                </p>
            
            </div> <!-- / end results -->
            
            <br />
            
            <?php
                    
                } // end of 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
                
            } // end else
            
            // if there are results, display them
    
            } // end isset
            
            ?>
                
        </div>    <!-- / main -->     
<?php include "sidebar.php"; ?>

<?php include "footer.php"; ?>