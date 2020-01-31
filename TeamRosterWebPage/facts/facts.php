<?php
$randNum = rand(0,15);

switch ($randNum)	// determines output based on user
{
	case 0:echo "<p>The Packers hold an NFL-Record 13 Championships, the years being... 
			<ol>
				<li>1929 Highest League Standing 12-0-1 Record</li>
				<li>1930 Highest League Standing 10-3-1 Record</li>
				<li>1931 Highest League Standing 12-2-0 Record</li>
				<li>1936 Defeated Boston Redskins 21-6 </li>
				<li>1939 Defeated New York Giants 27-0 </li>
				<li>1944 Defeated New York Giants 14-7 </li>
				<li>1961 Defeated New York Giants 37-0 </li>
				<li>1962 Defeated New York Giants 16-7 </li>
				<li>1965 Defeated Cleveland Browns 23-12 </li>
				<li>1966 (Super Bowl I) Defeated Kansas City Chiefs 35-10 </li>
				<li>1967 (Super Bowl II) Defeated Oakland Raiders 33-14</li> 
				<li>1996 (Super Bowl XXXI) Defeated New England Patriots 35-21</li> 
				<li>2010 (Super Bowl XLV) Defeated Pittsburgh Steelers 31-25</li>
			</ol> *1997 (Super Bowl XXXII) Lost to Denver Broncos 31-24 
			
			</p>";break;
	case 1:echo "<p>The Packers were created on August 11th, 1919 joining the NFL on August 27th, 1921</p>";break;
	case 2:echo "<p>The Packers are the only publically owned team with stock being avaliable just 5 times in history
			<ol>
					<li>1923: $5 per stock   Overall Sale: $5,545 </li>
					<li>1935: $25 per stock  Overall Sale: $12,100</li>
					<li>1950: $25 per stock  Overall Sale: $104,137.50</li>
					<li>1997: $200 per stock Overall Sale: $24,002,000</li>
					<li>2011: $250 per stock Overall Sale: $67,407,750</li>
			</ol>
			</p>";break;
	case 3:echo "<p> Lambeau Field was built in 1957 and was named City Field until September 11th, 1965 </p>";break;
	case 4:echo "<p> Lambeau Field has sold out every home game since 1960</p>";break;
	case 5:echo "<p> It would take 950 years before you could get a turn on the season-ticket waiting list</p>";break;
	case 6:echo "<p> Packers players ride kid's bikes for practices and training camp</p>";break;
	case 7:echo "<p> The Famous Lambeau Leap was created on December 26th, 1993 when Leroy Butler jumped into the stands for a touchdown celebration</p>";break;
	case 8:echo "<p> The Packers have had 3 hall of fame caliber quarterbacks throughout their history, all of which have won Super Bowls,
						the QBs being...
						<ul>
						<li>Bart Starr     (Super Bowls 1,2)</li>
						<li>Brett Favre    (Super Bowl: 31)</li>
						<li>Aaron Rodgers  (Super Bowl: 45) </li>
						</ul>
						</p>";break;
	case 9:echo "<p> The Packers have the second most postseason wins, tied with the Cowboys with (34) behind the Steelers (35) </p>";break;
	case 10:echo "<p> The Packers have the second highest winning percentage in NFL History (.567) behind the Cowboys (.573)</p>";break;
	case 11:echo "<p> The Packers have the second most hall of famers all time (24) behind the Bears (27) </p>";break;
	case 12:echo "<p> Fans are known as the `The Cheeseheads`</p>";break;
	case 13:echo "<p> Incredibly loyal fans, they often take over opposing stadiums increasing profits, it is the main reason the Packers are the only team not to play internationally</p>";break;
	case 14:echo "<p> The Packers biggest rivalry is the Chicago Bears, recently the packers have achieved a winning record against them, first time since 1933</p>";break;
	case 15:echo "<p> The Packers 2nd largest rivalry is the Minnesota Vikings, a hated rivalry to say the least, the vikings called the injuring of one the packers players a top 4 moment of the decade...(2010-2019)</p>";break;
	default: echo "<p>Aaron Rodgers is the G.O.A.T </p>"; break;
}
?>