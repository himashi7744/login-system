<!DOCTYPE>
<html>
    <head>
         <title>insert from</title>
         <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       <form action="save.php" method="post">
           <div class="wrapper">
             <div class="titile">
                INSERT FORM
             </div>
             <div class="form">
                 <div class="input_field">
                 <label>First Name</label>
                 <input type="text" class="input" name="firstName">
                 </div>
                 <div class="input_field">
                 <label>Last Name</label>
                 <input type="text" class="input" name="lastName">
                 </div>
                 <div class="input_field">
                 <label>Age</label>
                 <input type="text" class="input" name="age">
                 </div>
                 <div class="input_field">
                 <label>Date of birth</label>
                 <input type="date" class="input" name="dob">
                 </div>
                <div class="input_field">
                 <label>Food you like to eat</label>
                 <div class="custom_select">
                       <select name="food" >
                        <option value="Fried Rice" >Fried Rice</option>
                        <option value="Buriyani" >Buriyani</option>
                         <option value="Nasigorang" >Nasigorang</option>
                         <option value="Pineapple Rices">Pineapple Rices</option>
                          </select>
                    </div>
                    
                         
                 </div>
                 <div class="input_field">
                    <input type="submit" value="SUBMIT" class="btn">
                     <input type="reset" value="CANCEL" class="btn">
                    </div>
                 
                    
                    
                
               
               
             </div>
           </div>
        
        </form>
    </body>
</html>    