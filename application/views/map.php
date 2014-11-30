<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
	<h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <a href="home/logout">Logout</a>
<div id="googleMap" style="width:600px;height:480px;"></div>

</body>
</html>
