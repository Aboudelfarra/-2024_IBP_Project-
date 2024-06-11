<!DOCTYPE html>
<html>
<head>
    
    <title>Gaza Library</title>
</head>
       <style type="text/css">
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(122, 192, 233);
        }
        li{
            float: left;
            border-right: 1px solid #0d0e0f;
        }
        li a{
            color: rgb(16, 13, 13);
            text-align: center;
            padding: 15px ;
            text-decoration: none;
            display: block;

        }
        .li{
            font-size: 24px;
             color: #000;
              text-align: right;
                 float: right; 
                  
          }
          
          .f25{
        width: 24%;
        color: rgb(10, 9, 7);
        text-align: left;
      
      }
      .f75{
        width: 73%;
        color: rgb(19, 9, 7);
       text-align: left;
       padding: 5px;
      }
       </style>
    

<body>

    <div style="width: 100%; position:fixed; top:0;">
    <ul>
        <li><a href="#d3">contact us</a></li>
        <li><a href="#d2">BOOKS</a></li>
        <li><a href="#d2">ABOUT</a></li>
        <li><a href="#">HOME</a></li>
        <li style="float: right;"><a href="login.php">log in</a></li>
    </ul>
    </div>
    <center>
        <br><br>
        <div id="d1" class="d1"> 
           
            <h1>GAZA LIBRARY</h1 > 
                <div id="d1" style="background:  rgb(18, 20, 21); width: 100%; height: 45px;"> 
                 <div style="float:right; width: 100%;">   
                    <img src="IMAGES/PAL.jpeg" style="width: 30px;height: 30px;">
            </div>
        </div>

              <div id="d2" style="background:  rgb(246, 249, 249); width: 100%; height: 500PX;"> 
                <h2>WELCOME TO THE LIBRARY</h2>
               <div style="width: 45%; float: left;">
                <p>
                     <h1>ABOUT OUR LIBRARY</h1>
                     <h3>BOOKS </h3>
                       <h3>STORIES </h3>
                       <h3>RELAXING </h3>
                        <h3>HISTORY</h3>

               </p>
            </div>
            <div style="width: 45%; float: right;">
               <img style="width: 50%;height: 400px;" src="IMAGES/gaza.jpeg">
            </div>
              </div>
         <div  id="d3" style="background: #efebeb; width: 100%; height: 500PX;"> 
              <br><br>
            <h2>TOP (3) BOOKS IN OUR LIBRARY</h2>
            <div style="float: left; width: 25%;">
                <img src="IMAGES/B1.jpg" style="width:200px; height:200px;">
                      <label> (price: 35$) </label>
                     </div>
            <div style="float: left; width: 25%;">
                <img src="IMAGES/B2.jpeg" style="width:200px; height:200px;">
                <label> (price: 50$) </label>
            </div>

            <div style="float: left; width: 25%;">
                <img src="IMAGES/B3.jpeg" style="width:200px; height:200px;">  
               
                <label> (price: 40$) </label>
            </div>

        




        </div>

           
         <div id="d3" style="background: #0b82aa; width: 100%; height: 500PX;"> 
        <br><br>
            <h2>contact us</h2>
        <form>
            
            <div>
            <label class="f25"> name </label>
            <input class="f75"type="name">
            </div>
           <div>
           <label class="f25"> the message </label>
           <input class="f75"type="name">         
           </div>
            <div>
                <input type="submit" name="" value="SEND">
            </div>
        </form>
    </div>
         
        
    </center>
</body>
</html>
