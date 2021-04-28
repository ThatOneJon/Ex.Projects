<head>
    <title>Waren</title>
        <meta name="keywords" contents="Tabelle, Quality, Produkte">
        <meta charseit="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <style>

      


        .wrapper {
         margin-left: 20%;
         border: solid grey 2px;
         text-align: center;
         width: 65%;
         min-height: 50%;
         background-color:lightgrey;
		border: solid black 3px;

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
        padding: 1%;
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
            padding: 5%;
            font-weight: bold;
            }

            .Flex_con {
              display: flex;
              justify-content: space-around;
              width: 100%;

            }
         

            .box2 {
              width: 45%;
            }

            .Back {
              background: linear-gradient(90deg, rgba(50,6,6,1) 3%, rgba(156,35,35,1) 52%, rgba(79,12,23,1) 95%);
              height: 100%;
              margin-top: 1%;
			  padding-top: 1%;

            }

             
			button {
			margin-left:11%;
			margin-bottom: 5%;			
            min-width: 220px;
            padding: 10%;
            font-weight: bold;
			font-size: 19px;
			text-align:center;
            }
			
			button:hover {
				color: white;
				background-color: green;
				min-width: 230px;
				border:solid black 4px;
			}
				
			}
			
</style>

    </head>
<div class ="Back">

<div class="wrapper">
  <body>
  
<div class= "Flex_con">
 

 <div class = "box2">
    <br>
    <form action ="../Fertiges_Projekt/PHP(J)/wEigenschaften2.php" method ="POST">
      <label for ="to_Change">Waren-ID: </label>
      <input type = "text" id ="to_Change" name="WID" placeholder = "Warenbestand ID-0000">
      <br>
	  <label for ="WName">Warenname: </label>
	  <input type="text" id ="Name" name ="WName" placeholder="Warenname">

      <input type ="submit" id="anzeigen" name="anzeigen" value = "Bearbeiten">
	  <br>      <br>      <br>      <br>    <br>    <br>    <br>    <br> <br>
	  <button onclick = "location.href='../Fertiges_Projekt/Gesamtbestand.php'" type ="button">Gesamtbestand</button>
    </form>

    </div>
    </body>
</div>
</div>
</div>

    
