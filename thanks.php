<?php 
if(isset($_POST['submit'])){
$selected_val = $_POST['budget'];  
$selected_val = $_POST['countryCode']; // Storing Selected Value In Variable
//echo "You have selected :" .$selected_val;  // Displaying Selected Value
}

// extract($_REQUEST);
//$to  = 'chetanpanchal1994@gmail.com';
$to  = 'vijay@reignestates.com'; // note the comma///
// subject 
// $project=$_REQUEST['project'];
// $subject = " $project | Adani Samsara Vilasa";            
$subject = "Banner Form | Reign Real Estate";            
// message
$message = '
<table> 
<tr>
  <td>Project</td><td>'.$_REQUEST['project'].'</td>
</tr>   
<tr>
  <td>Name</td><td>'.$_REQUEST['name'].'</td>
</tr>
<tr>
  <td>Email</td><td>'.$_REQUEST['email'].'</td>
</tr>
<tr>
  <td>Phone</td><td>'.$_REQUEST['countryCode'].'</td><td>Phone</td><td>'.$_REQUEST['phone'].'</td>
</tr>
<tr>
  <td>Good Time to call</td><td>'.$_REQUEST['time'].'</td>
</tr>
<tr>
  <td>Budget</td><td>'.$_REQUEST['budget'].'</td>
</tr>
</table> 
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers  
$headers .= 'From: Landing Page : Villas | Dubai | Reign Real Estate <marketing@reignrealestate.ae>' . "\r\n";
$headers .= 'Cc: shashank@reignestates.com' . "\r\n";
$headers .= 'Bcc: marketing@reignrealestate.ae' . "\r\n";

// Mail it
 if( mail($to, $subject, $message, $headers));
 
 
 $fourQTParam =  array(
                    'UID'       => 'fourqt',
                    'PWD'       => 'wn9mxO76f34=',
                    'Channel'   => 'GA',
                    'Src'       => 'Google',
                    'ISD'       => '91',
                    'Mob'       => $_REQUEST['mobile'],
                    'Email'     => $_REQUEST['email'],
                    'name'      => $_REQUEST['name'],
                    'City'      => '',
                    'Location'  => '',
                    'Project'   => $_REQUEST['project'],
                    'Remark'    => 'Google',
                    'url'       => urlencode('https://gurgaon-projects.com/emaar-EBD-114'),
                    'UniqueId'  => '0'
                );

$makeUrlParam = http_build_query($fourQTParam);
$make4QtUrl = '#'.$makeUrlParam;
$curl_handle=curl_init();
curl_setopt($curl_handle,CURLOPT_URL,$make4QtUrl);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);//To get the exact response from the page instead of True &amp; False
curl_setopt($curl_handle,CURLOPT_SSL_VERIFYPEER,0);//for HTTPS
$curlResponse=curl_exec($curl_handle);
curl_close($curl_handle);
$decodeData = json_decode($curlResponse);
//  echo "<pre>";
//       print_r($decodeData);
//       die();
            
?>

<script>
alert('Enquiry has been sent successfully. We will get back to you soon.');
window.location.href="thankyou.html";
</script> 



