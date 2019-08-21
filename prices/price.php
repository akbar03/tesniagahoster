<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	
	<!-- Custom Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
	
	<link rel="stylesheet" href="master.css" media="screen">
	<link rel="stylesheet" href="reset.css" media="screen">
	
	<script type="text/javascript" src="css-browser-select.js"></script>
	
	<title>How to design and code a modern pricing table</title>
</head>
<body>
	
	<div id="pageContainer">
		
		<div id="tableContainer">
		
			<div class="tableCell">
				<div class="tableHeading">
					<h2>Basic</h2>
					
					<div class="price1 priceContainer">
						<p>$9<sup>.00</sup></p>
						<span>per month</span>
					</div> <!-- end price1 -->
				</div> <!-- end tableHeading -->
			</div>
			
			<div class="tableCell">
				<div class="tableHeading">
					<h2>Corporate</h2>
					
					<div class="price2 priceContainer">
						<p>$14<sup>.00</sup></p>
						<span>per month</span>
					</div> <!-- end price1 -->
				</div> <!-- end tableHeading -->
			</div>
			
			<div class="tableCell recommended">
				<div class="tableHeading">
					<h2>Business</h2>
					
					<div class="price3 priceContainer">
						<p>$29<sup>.00</sup></p>
						<span>per month</span>
					</div> <!-- end price1 -->
				</div> <!-- end tableHeading -->
			</div>
			
			<div class="tableCell noBorder">
				<div class="tableHeading">
					<h2>Platinum</h2>
					
					<div class="price4 priceContainer">
						<p>$59<sup>.00</sup></p>
						<span>per month</span>
					</div> <!-- end price1 -->
				</div> <!-- end tableHeading -->
			</div>
			
			<div class="cl"><!-- --></div>
				
			<table class="pricingTableContent">
				<tr class="signUpRow">
					<td><a href="#" class="signUpButton">Sign Up</a></td>
					<td><a href="#" class="signUpButton">Sign Up</a></td>
					<td class="recommended"><a href="#" class="signUpButton">Sign Up</a></td>
					<td class="noBorder"><a href="#" class="signUpButton">Sign Up</a></td>
				</tr>

				<!-- Table Content -->
				<tr>
					<td><strong>100MB</strong> Disk Space</td>
					<td><strong>300MB</strong> Disk Space</td>
					<td class="recommended"><strong>1GB</strong> Disk Space</td>
					<td class="noBorder"><strong>5GB</strong> Disk Space</td>
				</tr>

				<tr class="altRow">
					<td><strong>200MB</strong> Monthly Traffic</td>
					<td><strong>400MB</strong> Monthly Traffic</td>
					<td class="recommended"><strong>1GB</strong> Monthly Traffic</td>
					<td class="noBorder"><strong>Unlimited</strong> Monthly Traffic</td>
				</tr>

				<tr>
					<td><strong>2</strong> Subdomains</td>
					<td><strong>5</strong> Subdomains</td>
					<td class="recommended"><strong>10</strong> Subdomains</td>
					<td class="noBorder"><strong>Unlimited</strong> Subdomains</td>
				</tr>

				<tr class="altRow">
					<td><strong>5</strong> Email Accounts</td>
					<td><strong>10</strong> Email Accounts</td>
					<td class="recommended"><strong>25</strong> Email Accounts</td>
					<td class="noBorder"><strong>Unlimited</strong> Email Accounts</td>
				</tr>

				<tr>
					<td>Webmail Support</td>
					<td>Webmail Support</td>
					<td class="recommended">Webmail Support</td>
					<td class="noBorder">Webmail Support</td>
				</tr>

				<tr class="altRow">
					<td>MySQL Support</td>
					<td>MySQL Support</td>
					<td class="recommended">MySQL Support</td>
					<td class="noBorder">MySQL Support</td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td>PHP5 Support</td>
					<td class="recommended">PHP5 Support</td>
					<td class="noBorder">PHP5 Support</td>
				</tr>

				<tr class="altRow">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td class="recommended">Plesk Control Panel</td>
					<td class="noBorder">Plesk Control Panel</td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td class="recommended">&nbsp;</td>
					<td class="noBorder">Spam Assassin</td>
				</tr>
				
				<!-- Table Footer -->
				<tfoot>
					<tr>
						<td>
							<h4>$9<sup>.00</sup></h4>
							<span>per month</span>
							
							<a href="#" class="signUpButton">Sign Up</a>
						</td>

						<td>
							<h4>$14<sup>.00</sup></h4>
							<span>per month</span>
							
							<a href="#" class="signUpButton">Sign Up</a>
						</td>

						<td class="recommended">
							<h4>$29<sup>.00</sup></h4>
							<span>per month</span>
							
							<a href="#" class="signUpButton">Sign Up</a>
						</td>

						<td class="noBorder">
							<h4>$59<sup>.00</sup></h4>
							<span>per month</span>
							
							<a href="#" class="signUpButton">Sign Up</a>
						</td>
					</tr>
				</tfoot>
			</table>
			
		</div> <!-- end tableContainer -->

	</div> <!-- end pageContainer -->
	
</body>
</html>