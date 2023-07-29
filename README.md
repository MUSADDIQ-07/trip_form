# trip_form
This code is a simple PHP web application that allows users to fill out a form to confirm their participation in a US trip.
The PHP code establishes a connection to a MySQL database (assuming the database server is running on localhost with the username "root" and no password) named "us_trip".It checks if the form has been submitted (by checking if the 'name' field is set in the POST data).If the form is submitted, it retrieves the form data (name, age, gender, email, phone, and description) and constructs an SQL query to insert this data into the "trip" table along with the current timestamp.If the insertion is successful, it sets the variable $insert to true, which will later be used to display a success message on the web page. If there's an error during insertion, it will display the error message.

The HTML form:

The form allows users to input their name, age, gender, email, phone number, and a description (textarea).When the user submits the form, it sends the data to the same page (index.php) using the POST method.

The CSS (style.css):

The CSS code styles the form and its elements, defining the layout, colors, and fonts.
