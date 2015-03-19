<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='description' content=''>
	<meta name='author' content=''>
	<link rel='icon' href='assets/img/favicon.ico'>
	<title>ALE Calc</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class='container-fluid'>		
		<h1>ALE Calc (Alpha)</h1>
		<p>Welcome to the new ALE Calculator application. Please note that this version is the Alpha and isn't meant to be pretty. If you encounter any bugs or have suggestions please contact the Zultra.</p>
		<div class='row'>
			<div class="col-sm-8">
				<h2>Officer Information</h2>
				Arresting Officer Rank <select>
										<option>Boo</option>
										</select>
				<h2>Aviation Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>A-02</td>
							<td>A minimum flight level of 150 must be maintained whilst flying over city limits</td>
							<td><button class='ticketbutton' data-ticketvalue='10000'>$10,000</button></td>
							<td> N/A </td>
							<td><button class='ticketbutton' data-specialvalue='Impound Vehicle'>Impound Vahicle</button></td>
							<td> N/A </td>
						</tr>
						<tr>
							<td>A-03</td>
							<td>Aircraft doesn't possess or use collision lights in low-light conditions</td>
							<td><button class='ticketbutton' data-ticketvalue='10000'>$10,000</button></td>
							<td> N/A </td>
							<td> N/A </td>
							<td> N/A </td>
						</tr>
						<tr>
							<td>A-04</td>
							<td>Landing in a non-permitted landing zone</td>
							<td><button class='ticketbutton' data-ticketvalue='10000'>$10,000</button></td>
							<td> N/A </td>
							<td><button class='ticketbutton' data-specialvalue='Impound Vehicle'>Impound Vahicle</button></td>
							<td> N/A </td>
						</tr>
					</tbody>
				</table>
				<h2>Criminal Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>C-01</td>
							<td>Murder, Murder of an officer</td>
							<td> N/A </td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue='15'>15 Years</button> <button class='jailbutton' data-ticketvalue='8'>(8)</button></td>
						</tr>
						<tr>
							<td>C-01A</td>
							<td>Assault with a firearm; Firing on an Officer; Attempted Murder</td>
							<td> N/A </td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-01B</td>
							<td>Failure to report manslaughter in self defence</td>
							<td><button type='button' class='ticketButton' value='10000'>$10,000</button></td>
							<td>N/A</td>
							<td>N/A</td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
							<tr>
							<td>C-03</td>
							<td>Kidnapping</td>
							<td><button type='button' class='ticketButton' value='10000'>$10,000</button></td>
							<td>N/A</td>
							<td>N/A</td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
							<tr>
							<td>C-04</td>
							<td>Armed Robbery; Mugging; Theft; Breaking and Entering; Att. Burglary; Bank robbery</td>
							<td><button type='button' class='ticketButton' value='10000'>$10,000</button></td>
							<td>N/A</td>
							<td>N/A</td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
							<tr>
							<td>C-04A</td>
							<td>Grand Theft Auto - 2nd Degree GTA - Attempted GTA - Supplying Chop Shop</td>
							<td><button type='button' class='ticketButton' value='10000'>$10,000</button></td>
							<td>N/A</td>
							<td>N/A</td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-05</td>
							<td>Battery</td>
							<td><button type='button' value='5000'>$5,000</button></td>
							<td><button type='button' value='10000'>$10,000</button></td>
							<td><button type='button' value='Confiscate'>Confiscate</button></td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
							<tr>
							<td>C-05A</td>
							<td>Battery</td>
							<td><button type='button' value='5000'>$5,000</button></td>
							<td><button type='button' value='10000'>$10,000</button></td>
							<td><button type='button' value='Confiscate'>Confiscate</button></td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-05B</td>
							<td>Possession of illicit narcotics/contraband items of a value in excess $10000 - Felony possession</td>
							<td> $10,000 </td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-06</td>
							<td>Failure to report manslaughter in self defence</td>
							<td> $10,000 </td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-07</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-08</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-09</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-10</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-11</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-12</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>C-13</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
					</tbody>
				</table>
				<h2>Firearm Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>F-01</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>F-05</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>F-06</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>F-07</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>F-08</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>F-09</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
					</tbody>
				</table>
				<h2>General Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>G-01</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						</tbody>
				</table>
				<h2>Traffic Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>T-01</td>
							<td></td>
							<td></td>
							<td>N/A</td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-02</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-03</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-03A</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-03B</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-04</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-05</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-05A</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-05B</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-06</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-07</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-08</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-09</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-10</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-11</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>T-12</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						</tbody>
				</table>
				<h2>Water Offences</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Code</th>
							<th>Infraction</th>
							<th>1st Offence</th>
							<th>Repeated Offences</th>
							<th>Special</th>
							<th>Max Jail Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>W-01</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>W-02</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						<tr>
							<td>W-03</td>
							<td></td>
							<td></td>
							<td> N/A </td>
							<td> N/A </td>
							<td><button class='jailbutton' data-ticketvalue=''></button> <button class='jailbutton' data-ticketvalue=''>()</button></td>
						</tr>
						</tbody>
				</table>
			</div>
			<div id='resultList' class="col-sm-4">
			
				
				<h3>Ticket Total: $<span id='ticketTotalDisp'>0</span> Dollars</h3>
				<h3>Jail Time: $<span id='jailTimeDisp'>0</span> Years</h3>
				<h3>Don't Forget to: <span id='specialDisp'></span></h3>
				
			
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
var ticketValues = 0;
var jailValues = 0;
function updateJailTime() {
 jailValues += $(this).data('jailvalue');
 alert(jailValues);
}
function updateTicketTotal() {
 ticketValues += $(this).data('ticketvalue');

  $('#ticketTotalDisp').html(ticketValues);
}
function main() {
$('.ticketbutton').on('click',updateTicketTotal);
$('.jailbutton').on('click',updateJailTime);
$('#clearAllButton').on('click',clearAll);
}
$(document).ready(main);
</script>

</body>
</html>
