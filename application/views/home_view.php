<!DOCTYPE html>
<html>
    <head>
        <script
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script>
            function initialize()
            {
                var mapProp = {
                    center:new google.maps.LatLng(7.0667,125.6000),
                    zoom:11,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        <h2>Welcome <?php echo $name;?> !</h2>
        <div id="googleMap" style="width:1000px;height:480px;"></div>
    </body>
</html>