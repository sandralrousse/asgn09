<?php

function convert_to_imperialgallons($value, $from_unit) {
  switch($from_unit) {
    case 'Bucket':
      return $value * 4;
      break;
    case 'Butt':
      return $value * 108;
      break;
    case 'Firkin':
      return $value * 9;
      break;
    case 'Hogshead':
      return $value * 54;
      break;
    case 'Imperial Gallon':
      return $value * 1; 
      break;
    case 'Pint':
      return $value * 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}
  
function convert_from_imperialgallons($value, $to_unit) {
  switch($to_unit) {
    case 'Bucket':
      return $value / 4;
      break;
    case 'Butt':
      return $value / 108;
      break;
    case 'Firkin':
      return $value / 9;
      break;
    case 'Hogshead':
      return $value / 54;
      break;
    case 'Imperial Gallon':
      return $value / 1;
      break;
    case 'Pint':
      return $value / 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_imperialgallons($value, $from_unit, $to_unit) {
  $imperialgallon_value = convert_to_imperialgallons($value, $from_unit);
  $new_value = convert_from_imperialgallons($meter_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(!isset($_POST['submit'])) {
  $_POST['submit'] = '';
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Liquids</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Volumizer</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="buckets"<?php if($from_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butt"<?php if($from_unit == 'butt') { echo " selected"; } ?>>Butt</option>
            <option value="firkin"<?php if($from_unit == 'firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="hogshead"<?php if($from_unit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
            <option value="imperial Gallon"<?php if($from_unit == 'imperial Gallon') { echo " selected"; } ?>>Imperial Gallon</option>
            <option value="pint"<?php if($from_unit == 'pint') { echo " selected"; } ?>>Pint</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>"/>&nbsp;
          <select name="to_unit">
          <option value="buckets"<?php if($to_unit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butt"<?php if($to_unit == 'butt') { echo " selected"; } ?>>Butt</option>
            <option value="firkin"<?php if($to_unit == 'firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="hogshead"<?php if($to_unit == 'hogshead') { echo " selected"; } ?>>Hogshead</option>
            <option value="imperial Gallon"<?php if($to_unit == 'imperial Gallon') { echo " selected"; } ?>>Imperial Gallon</option>
            <option value="pint"<?php if($to_unit == 'pint') { echo " selected"; } ?>>Pint</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
