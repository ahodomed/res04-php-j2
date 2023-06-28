<?php

    $routes=['contact','about','home'];

    if(isset($_GET["route"]) && !empty($_GET["route"]))
{
        
        foreach ($routes as $route){

            // echo $route;
            if($_GET['route']=== $route){
                
                echo "ggjndndsfkn";
                require $route.".phtml";
            }
        }
    

}
        //  echo $route; variable en provenance du tableau

        // echo $_GET['route']; variable a testé
    
    
    
    
    
    
    
    
    
    
    
    
    
    // foreach($routes as $route)
    // {
        
    //      if(isset($_GET["route"]) && !empty($_GET["route"]))
    //     {
            
    //                 require("home.phtml");
                 
    //      }else if($_GET["route"]=== "about"){
                    
    //                 require("about.phtml");

    //      }else if($_GET["route"]==="contact"){
             
    //                 require("contact.phtml");

    //      }else{
                 
    //                  require("home.phtml");
    //             }
        
            
        
    // };
   
    

    
?>