<!DOCTYPE HTML>

    <div class="box side">
            
            <h2>
            
                Search&#128269;  |   <a class="side" href="show_all_food.php">Show All</a>
            
            </h2>
        
        <form method="post" action="name_search.php" enctype="multipart/form-data" >
            
                <input class="search" type="text" name="name" size="39" value="" required placeholder="Name of Food..." />
                
                <input class="submit" type="submit" name="find_name" value="&#128269;"/>
                
            </form>

            
            
        <form method="post" action="mealtime_search.php" enctype="multipart/form-data" >
            
                <select name="meal">
                    <option value="" disabled selected>Meal Time...</option>
                    
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Dessert">Dessert</option>
                    
                </select>

            <input class="submit" type="submit" name="find_meal" value="&#128269;" />
                
        </form>
    
        <form method="post" action="location_search.php" enctype="multipart/form-data" >
            
                <select name="location">
                    <option value="" disabled selected>Location...</option>
                    
                    <option value="Home">Home</option>
                    <option value="Sushi Ya">Sushi Ya</option>
                    <option value="St Pierres">St Pierres</option>
                    <option value="Tascas">Tascas</option>
                    <option value="Ephesus Turkish Kitchen">Ephesus Turkish Kitchen</option>
                    
                </select>

            <input class="submit" type="submit" name="find_location" value="&#128269;" />
                
        </form>
    </div>
