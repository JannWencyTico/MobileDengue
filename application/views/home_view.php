<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Dengue 101</title>
    <script
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>

    <script>
    function initialize()
    {
    var mapProp = {
    center:new google.maps.LatLng(7.1820377,125.4387594),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
    <h2>Welcome <?php echo $firstname;?> <?php echo $lastname; ?>!</h2>
    <div id="googleMap" style="width:1000px;height:480px;"></div>
</body>
</html>
