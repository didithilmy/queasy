
# Queasy - Queueing Made Easy

Queasy is an online queueing system specifically designed to ease the process of waiting for SNMPTN re-registration process. It is designed with seamlessness in mind. The ultimate goal of this project is to reduce the total time required to finish the queue and ease the physical strain of the queue participants.

## Modules

Queasy consists of four primary modules:

 1. Queue estimation page -- Accepts queue no to display the estimate `/estimasi`
 2. Reception Kiosk -- Scans preliminary document barcode and issues queue number `/kiosk`
 3. Display Board -- Displays currently-processed queue numbers `/queue`
 4. Service Desk -- Allows operators to proceed to the next queue `/prosesi`

## Deploying Queasy

Currently, Queasy is in the development stage, hence only the frontend pages are built. Queasy uses Slim framework and Composer for its dependency management. To deploy Queasy, first you need to have Composer installed and execute the following command:
	
~~~~
composer install
~~~~

After all dependencies are installed, you need to change the base URL. This can be done from index.php by changing the value of the BASE_URL constant, or you need to set the OS environment variable BASE_URL with the base URL. On Linux-based systems, this can be done by executing the following command:
```
export BASE_URL="http://base_uri:port/" 
```
