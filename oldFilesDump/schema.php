<?php 
function getLocalBusinessSchema($name, $image, $address, $telephone, $openingHours) {
  $schema = '<script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "name": "' . $name . '",
    "image": "' . $image . '",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "' . $address['streetAddress'] . '",
      "addressLocality": "' . $address['addressLocality'] . '",
      "addressRegion": "' . $address['addressRegion'] . '",
      "postalCode": "' . $address['postalCode'] . '",
      "addressCountry": "' . $address['addressCountry'] . '"
    },
    "telephone": "' . $telephone . '",
    "openingHoursSpecification": [';
  foreach ($openingHours as $hours) {
    $schema .= '{
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [' . $hours['dayOfWeek'] . '],
      "opens": "' . $hours['opens'] . '",
      "closes": "' . $hours['closes'] . '"
    },';
  }
  $schema .= ']
  }
  </script>';
  return $schema;
}

//hen you can use the function to generate the schema markup by passing in the relevant data as arguments, like this:


$name = "Manezinho";
$image = "https://www.manezinho.com/images/restaurant.jpg";
$address = array(
  "streetAddress" => "123 Main Street",
  "addressLocality" => "São Jorge",
  "addressRegion" => "Azores",
  "postalCode" => "9000-000",
  "addressCountry" => "PT"
);
$telephone = "+351 123 4567";
$openingHours = array(
  array(
    "dayOfWeek" => "['Monday','Tuesday']",
    "opens" => "11:00",
    "closes" => "22:00"
  ),
  array(
    "dayOfWeek" => "['Wednesday','Thursday','Friday']",
    "opens" => "11:00",
    "closes" => "23:00"
  ),
  array(
    "dayOfWeek" => "['Saturday']",
    "opens" => "10:00",
    "closes" => "23:00"
  ),
  array(
    "dayOfWeek" => "['Sunday']",
    "opens" => "10:00",
    "closes" => "



Regenerate response