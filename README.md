# travel_agency_db
Travel Agency Database is a MySQL and PHP project that manages customer information, travel packages, invoices, and commissions for agents. The project uses six tables, two stored procedures, and two triggers to store and retrieve data.

## Usage
To use this project:
  * Navigate to the insert.php file in your web browser to enter a new customer information.  
  * Fill into the form and click the "Submit" button. The customer information will be saved to the database.
  * To retrieve a customer's information, enter their customer ID into the form and click the "Display" button. The customer's information will be displayed.
  * To view travel package information, use the get_package_info stored procedure. The travel package information will be retrieved from the database and displayed.
  * To delete an invoice and its details, use the delete_invoice stored procedure.
  * The two triggers, set_agent_commission and delete_agent_commission, will automatically set up and delete an agent's commission when a new invoice is added or deleted.
