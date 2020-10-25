<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Description...ext... -->
        <title>Guitar Project</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="light">Guitar</span> Designer</h1>
            </div>
            <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="selected"><a href="plan.php">Plan</a></li>
                <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
        </div>
        </header>
        <?php 
        if (!isset($_COOKIE["loggedin"])) {
            echo '<script>alert("Your Not Logged In So Your Build Wont Be Saved\r\nGo to Account To Log In");</script>'; 
        }
        
        ?>     
       <section id="build_title">
           <div class="container">
               <h1>Plan and Design</h1>
           </div>   
        </section>
        <section>
            <div class="build_form">
                <form action="planCheck.php" method="get">
                    <h4>Name Your Build</h4>
                    <input type="text" class="part_select" name="build_name" required=true>
                    <h4>Body Wood: </h4>
                    <select class="part_select" name="body_wood" required=true>
                        <option value="Alder">Alder</option>
                        <option value="Basswood">Basswood</option>
                        <option value="Mahogany">Mahogany</option>
                        <option value="Maple">Maple</option>
                        <option value="Korina">Korina</option>
                    </select>
                    <h4>Fret Surface Material: </h4>
                    <select class="part_select" name="fret_surface_wood" required=true >
                        <option value="F Rosewood">Rosewood</option>
                        <option value="F Ebony">Ebony</option>
                        <option value="F Maple">Maple</option>
                        <option value="F Pau Ferro">Pau Ferro</option>
                        <option value="F Richlite">Richlite</option>
                    </select>
                    <h4>Body Type: </h4>
                    <select class="part_select" name="body_type" required=true >
                        <option value="Stratocaster">Stratocaster</option>
                        <option value="Superstrat">Superstrat</option>
                        <option value="Les Paul">Les Paul</option>
                        <option value="Telecaster">Telecaster</option>
                        <option value="Holobody Cut Away">Holobody Cut Away</option>
                    </select>
                    <h4>Neck Type: </h4>
                        <select class="part_select" name="neck_type" required=true >
                        <option value="C Shape">C Profile</option>
                        <option value="V Shape">V Profile</option>
                        <option value="U Shape">U Profile</option>
                    </select>
                    <h4>Head Type: </h4>
                    <select class="part_select" name="head_type" required=true >
                        <option value="H Ibanez">Ibanez</option>
                        <option value="H Les Paul">Les Paul</option>
                        <option value="H Telecaster">Telecaster</option>
                        <option value="H Stratocaster">Stratocaster</option>
                    </select>
                    <h4>Pick Up 1: </h4>
                    <select class="part_select" name="pick_up_1" required=true>
                        <option value="Single Coil Neck">Standard Single Coil</option>
                        <option value="Humbucker Neck">Humbucker</option>
                        <option value="P-90 Neck">P-90</option>
                    </select>
                    <h4>Pick Up 2: </h4>
                    <select class="part_select" name="pick_up_2" required=true>
                        <option value="Single Coil mid">Standard Single Coil</option>
                        <option value="Humbucker Mid">Humbucker</option>
                        <option value="P-90 Mid">P-90</option>
                    </select>
                    <h4>Pick Up 3: </h4>
                    <select class="part_select" name="pick_up_3" required=true>
                        <option value="Single Coil Bridge">Standard Single Coil</option>    
                        <option value="Humbucker Bridge">Humbucker</option>
                        <option value="P-90 Bridge">P-90</option>
                    </select>
                    <h4>Tunning Nuts: </h4>
                    <select class="part_select" name="tunning_nuts" required=true >
                        <option value="Golden Age Ovel Knob 6-in-line">Golden Age Ovel Knob 6-in-line</option>
                        <option value="DAddario Planet Waves Auto-Trim">DAddario Planet Waves Auto-Trim</option>
                        <option value="Fender Locking">Fender Locking</option>
                        <option value="Economy Open Gear 3+3">Economy Open Gear 3+3</option>
                        <option value="Grover Original Rotomatics 3+3">Grover Original Rotomatics 3+3</option>
                        <option value="Golden Age Restoration">Golden Age Restoration</option>
                    </select>
                    <h4>Bridge: </h4>
                    <select class="part_select" name="bridge_type" required=true >
                        <option value="Gotch Stop Tailpiece">Gotch Stop Tailpiece</option>
                        <option value="Golden Age Roller Bridge">Golden Age Roller Bridge</option>
                        <option value="Highwood Contoured Vintage Saddles">Highwood Contoured Vintage Saddles</option>
                        <option value="Nashville Tune-o-matic">Nashville Tune-o-matic</option>
                        <option value="Golden Age Top-Loading Hardtail">Golden Age Top-Loading Hardtail</option>
                    </select>
                    <h4>Strings: </h4>
                    <select class="part_select" name="strings" required=true >
                        <option value="Extra Slinky 8-38">Extra Slinky 8-38</option>
                        <option value="Super Slinky 9-42">Super Slinky 9-42</option>
                        <option value="Regular Slinky 10-46">Regular Slinky 10-46</option>
                        <option value="Power Slinky 11-48">Power Slinky 11-48</option>
                        <option value="Beefy Slinky 11-54">Beefy Slinky 11-54</option>
                        <option value="Not Even Slinky 12-56">Not Even Slinky 12-56</option>
                    </select>
                    <h4>Finish: </h4>
                    <select class="part_select" name="Finish" required=true >
                        <option value="Sunburst Gloss">Sunburst Gloss</option>
                        <option value="Sunburst Matt">Sunburst Matt</option>
                        <option value="Polyyurethane">Polyyurethane</option>
                        <option value="Polyester">Polyester</option>
                        <option value="Nitrocellulose Lacqu">Nitrocellulose Lacqu</option>
                    </select>
                    
                    <div id="build_submit">
                    <input type="submit"/>
                    </div>
                </form>
            </div>
        </section>
        
    
    </body>
</html>