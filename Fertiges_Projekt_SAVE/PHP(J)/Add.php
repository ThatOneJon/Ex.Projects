<head>
    <title>Waren</title>
        <meta name="keywords" contents="Tabelle, Quality, Produkte">
        <meta charseit="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style>

      

        

        .wrapper2 {
         margin-left: 20%;
		border: solid black 3px;
         text-align: center;
         width: 65%;
         min-height: 50%;
         background-color:lightgrey;
		 padding-top: 3%;
		
        }


        input[type="number"] {

        margin-left: 5%;
        text-align: left;
        padding-left: .5%;
        width: 20%;
        min-width: 200px;
        display: inline-block;
        }

        input[type="text"]{

        margin-left: 5%;
        text-align: left;
        padding-left: .5%;
        width: 20%;
        min-width: 200px;
        display: inline-block;
        }



        label {
        width: 40%;
        min-width: 100px;
        font-size: 22px;
        overflow: hidden;
        display: inline-block;


       }

        @media only screen and (max-width: 1000px) {


            label {
                margin-top:.1%;
                margin-bottom: .5%;
                margin-left: 0;
            }

          .Flex_con {
              flex-direction: column;
            }
        }

            input[type="submit"]    {
            margin-left:11%;
            margin-top: 10%;
            width: 10%;
            min-width: 150px;
            padding: 5px;
            font-weight: bold;
            }

            .Flex_con {
              display: flex;
              justify-content: space-around;
              width: 100%;

            }

            .box1 {
              display: flex;
              width: 45%;
              justify-content: center;
              flex-direction: column;
            }

           

            .Back {
              background: linear-gradient(90deg, rgba(50,6,6,1) 3%, rgba(156,35,35,1) 52%, rgba(79,12,23,1) 95%);
              height: 100%;
              margin-top: 1%;
				padding-top:1%;
            }

            

</style>

    </head>
<div class ="Back">

<div class="wrapper2">
  <body>
    
<div class= "Flex_con">
  <div class = "box1">
    <form action="https://bob.rewi.uni-mainz.de/ebusiness029/Fertiges_Projekt/PHP(J)/Add2.php" Method ="POST" id="Wareneingabe">            
        <br>
        <label class="Label" for="ID">Waren-name: </label>
        <input type="text" id="name" name="Name" placeholder="Waren-Bezeichnung"><br>
        <br>
        <label class="Label" for="Einkaufspreis">Einkaufspreis: </label>
        <input type="number" id="Einkaufspreis" name= "Eink" placeholder="EK-Preis" ><br>
        <br>
        <label class="Label" for="Verkaufspreis">Verkaufspreis: </label>
        <input type="Number" id="Verkaufspreis" name="Verk" placeholder="VK-Preis">
          <div id ="SubButton">
               <input type="submit" value="submit" name="submit">
          </div>
   </form></div>


 
    </body>
</div>
</div>
</div>

 