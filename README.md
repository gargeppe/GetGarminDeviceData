Get Garmin Device Data
======================

How to get data from a Garmin device using the Garmin Communicator Plugin API. Before to start I suggest to read the official Garmin documentation:
http://developer.garmin.com/web-device/garmin-communicator-plugin/

To work with the Garmin Communicator Plugin you must generate your personal Site Key that activate the Garmin browser plugin in a production environment:
http://developer.garmin.com/web-device/garmin-communicator-plugin/get-your-site-key/


Files
----------------------
- inizio.html
    1. Check if the Communicator Plugin is istalled
    2. Check if there is any Garmin device connected
    3. List all the device connected
    4. Compile the hidden fields and show the send button

- fine.php
    1. Receive the data via POST
    2. Print the data
