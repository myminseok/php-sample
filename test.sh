#!/bin/bash

## https://docs.cloudfoundry.org/concepts/http-routing.html#app-instance-routing

DOMAIN=cfapps.haas-224.pez.pivotal.io

export APP1_GUID=$(cf app php1 --guid)
echo "curl -k https://php.$DOMAIN/test.php -H \"X-Cf-App-Instance\":\"$APP1_GUID:0\""
curl -k https://php.$DOMAIN/test.php -H "X-Cf-App-Instance":"$APP1_GUID:0"

echo ""
echo ""

export APP2_GUID=$(cf app php2 --guid)
echo "curl -k https://php.$DOMAIN/test.php -H \"X-Cf-App-Instance\":\"$APP2_GUID:0\""
curl -k https://php.$DOMAIN/test.php -H "X-Cf-App-Instance":"$APP2_GUID:0"