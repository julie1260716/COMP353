<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Employee Home Page</title>
        <meta name="description" content="Comp 353 Project">
        <link rel="stylesheet" href="main_stylesheet.css">
    </head>
    <body>
      <div id="container">
        <h1>BANK.</h1>
        <h2>Welcome to Online Banking</h2>

        <form action="../signup/signup.php">

			<div class="flex-container">   
				<div class = "account">   
					<p class="subtitle">Hello </p>
					    <ul> 
						   <li><a href="../hire_employee/hire_employee.php">Add new employee</a></li>
						   <li><a href="../fire_employee/fire_employee.php">Fire employee</a></li>
						   <li><a href="../close_client_account/close_client_account.php">Close client account</a></li>
						   <li><a href="../terminate_client/terminate_client.php">Terminate Client</a></li>
						 </ul>

                	<br>
                	<button type="submit" style="font-size: 16px" formaction="../employee_home_page/employee_home_page.php">Log out</button>
                	<br>

					Input employee ID to search for: <input type="text" name="employee_id"> <input type="button" value="Search">
					<br>
					<br>

					<table class="display_employee_info">
						Employee information:
						<tr>
							<td>First Name</td>
							<td>Last Name</td>
							<td>Age</td>
							<td>Position</td>
							<td>Payroll</td>
							<td>Sick days left</td>
						</tr>

						<tr class="employee_info">
							<td id="First_Name">James</td>
							<td id="Last_Name">Nguyen</td>
							<td id="Age">20</td>
							<td id="Position">President</td>
							<td id="Payroll">1,000,000</td>
							<td id="Sick_day_left">7</td>
						</tr>
					</table>
				</div>
		   </div><!--end of flex-container-->
    </form> 
       
     </div><!--end of container div-->
        
    </body>
</html>
