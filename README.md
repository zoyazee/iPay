# iPay

Copy files 'ipay.php and veriry.php' to local or hosted server directory 'httdocs'

Run script ipay.php to initiate transaction, A success payment will return values on a callback. response values will be written to response.log 

Run veriry.php to verify the above transaction which will read the key 'status' from response.log. If status = aei7p7yrx4ae34
the payment will be verified successfully.

