<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>CONTRA DENGUE</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $lastname; ?>!</h2>
   <a href="home/logout">Logout</a>
 </body>
</html>
=======
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
   <h2>Welcome <?php echo $lastname; ?>!</h2>
<div id="googleMap" style="width:600px;height:480px;"></div>

</body>
</html>
>>>>>>> 94740730fa4da50a32c46b0b2f60236d46e3be69
