<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- Thank you for watching--->
    <!-- This is Geczi Manase -->
    <!-- Have a nice day -->

    <link href="<?php echo base_url().'assets/css/Design.css'?>" rel="stylesheet" type="text/css">
    <script type="text/javascript">

        //ok , it's working , we are done , if you want to add imgs you have to :

        //1 - add an img tag with id : Img++; ex:  <img id="Img4" src="IMG/1.jpg"/>
        //2 - add an li tag  with id : S++;   ex:  <li id="S4"></li>
        //3 - add an p tag with id : SP++;    ex:  <p id="SP4"></p>
        //4 - change the value of nrImg 

        var nrImg = 3;  //the number of img , I only have 3 
        var IntSeconds = 4;     //the seconds between the imgs

        function Load()
        {
            nrShown = 0;    //the img visible
            Vect = new Array(nrImg + 10);
            Vect[0] = document.getElementById("Img1");
            Vect[0].style.visibility = "visible";

            document.getElementById("S" + 0).style.visibility = "visible";

            for (var i = 1; i < nrImg; i++)
            {
                Vect[i] = document.getElementById("Img" + (i + 1));
                document.getElementById("S" + i).style.visibility = "visible";
            }

            document.getElementById("S" + 0).style.backgroundColor = "rgba(255, 255, 255, 0.90)";
            document.getElementById("SP" + nrShown).style.visibility = "visible";

            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        function Timer()
        {
            nrShown++;
            if (nrShown == nrImg)
                nrShown = 0;
            Effect();
        }
        //next img
        function next()
        {
            nrShown++;
            if (nrShown == nrImg)
                nrShown = 0;
            Effect();

            clearInterval(mytime);
            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        function prev()
        {
            nrShown--;
            if (nrShown == -1)
                nrShown = nrImg -1;
            Effect();

            clearInterval(mytime);
            mytime = setInterval(Timer, IntSeconds * 1000);
        }
        //here changes the img + effect
        function Effect()
        {
            for (var i = 0; i < nrImg; i++)
            {
                Vect[i].style.opacity = "0";   //to add the fade effect
                Vect[i].style.visibility = "hidden";

                document.getElementById("S" + i).style.backgroundColor = "rgba(0, 0, 0, 0.70)";
                document.getElementById("SP" + i).style.visibility = "hidden";
            }
            Vect[nrShown].style.opacity = "1";
            Vect[nrShown].style.visibility = "visible";
            document.getElementById("S" + nrShown).style.backgroundColor = "rgba(255, 255, 255, 0.90)";
            document.getElementById("SP" + nrShown).style.visibility = "visible";
        }

    </script>
    <title></title>
</head>
<body onload="Load()">
    <div id="slider">
        <div id="imgs">
            <!-- here you have to add the img tag -->
            <img id="Img3" src="<?php echo base_url('images/Tip1.jpg') ?>">
            <img id="Img2" src="<?php echo base_url('images/Tip2.jpg') ?>">
            <img id="Img1" src="<?php echo base_url('images/Tip3.jpg') ?>">
        </div>
        <!--Here is going to be the left right buttons, the info and the imgs shown-->
        <div id="Snav">
            <!-- here is the circles , showes the current img -->
            <div id="SnavUp">
                <div id="Scircles">
                    <ul>
                        <!-- here you have to add the li tag-->
                        <li id="S0"></li>
                        <li id="S1"></li>
                        <li id="S2"></li>
                    </ul>
                </div>
            </div>
            <!-- the left and right button -->
            <div id="SnavMiddle">
                <img id="Sleft" src="<?php echo base_url('images/left.png') ?>" onclick="prev()"/>
                <img id="Sright" src="<?php echo base_url('images/right.png') ?>" onclick="next()"/>
            </div>
            <!-- the info -->
            <div id="SnavBottom">
                <!-- here you have to add the p tag-->
                <p id="SP2">Hugasi ang flower Base</p>
                <p id="SP0">Limpyohe ang mga ligid </p>
                <p id="SP1">Limpyohe ang Atop</p>
            </div>
        </div>
    </div>
</body>
</html>
