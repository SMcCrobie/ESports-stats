
<!DOCTYPE html>
<html>
<title>PlayerCard</title>
<head>
  <link rel="stylesheet" href="./css/basics.css">
  <link rel="stylesheet" href="./css/gallery.css">
</head>
<body>

<h1><a href="esportsmain.html">ESports Stats</a></h1>
<ul>
    <li><a href="esportsmain.html"> eSports</a></li>
    <li><a href="home.html"> Home </a> </li>
    <li><a class ="active" href="teams.html"> Teams</a> </li>
    <li><a href="rankings.html"> Rankings</a> </li>
    <li class="search"><input type="text" name="search" placeholder="Search.."></li>
    <li class="title"><h2>StarCraft II</h2></li>
</ul>
<?php
print "<h3> Jun TY Tae Yang - Team Splyce </h3>" ;
?>
<div class="bio">
 <div class="element"> <img id="player_img" class="player" src="images/ty.jpg"></img></div>
 <div class="element_text"><p>Entering the professional gaming world at the age of 12, TY was one of the youngest professional gamers ever. After an up and down start to his career, TY found himself with enough points after a solid 2016 year to earn himself a spot at the 2016 playoffs at BlizzCon. </p></div>
 <div class="element"><a href="splyce.html"><img class="team_logo" src="images/splyce.jpg"></img></div>
</div>

<h3>Statistics</h3>
<div class="stats">
  <div class="basics">
    <table class="basics">
      <h4>Basics</h4>
    	<tr>
    		<th> Race </th>
      </tr>
      <tr>
        <td><img class="rSymbol" src="./images/zerg_logo.svg"> Zerg</td>
      <tr>
    		<th> World Ranking </th>
      </tr>
      <tr>
        <td>5th</td>
      </tr>
      <tr>
        <th> Longest Win Streak </th>
    	</tr>
      <tr>
        <td>11</td>
      </tr>
    </table>
  </div>
  <div class="matchups">
    <h4>Match Statistics</h4>
    <table class="matchups">
      <tr>
        <th> vs. Protoss </th>
        <th> vs. Terran </th>
        <th> vs. Zerg </th>
      </tr>
      <tr>
    		<td> 2-0 </td>
    		<td> 7-1 </td>
    		<td> 1-2 </td>
      </tr>
      <tr>
        <th> Current Streak </th>
        <th> Next Match </th>
        <th> Last Match </th>
      </tr>
      <tr>
        <td> W2 </td>
        <td> TBD </td>
        <td> vs. GuMiho (Terran, W2-0) </td>
      </tr>
    </table>
  </div>
</div>


<div class="news">
  <h3>Videos</h3>
  <div class="gallery">
    <a href="https://splyce.gg/content/677/the-battle-for-blizzcon-stats-and-ty" target="_blank"><img src="images/splyce.PNG">
      <div class="desc">The Battle for BlizzCon: Stats and TY</div></a>
  </div>
  <div class="gallery">
    <a href="https://splyce.gg/content/666/the-korean-crown" target="_blank"><img src="./images/Stats1.PNG">
      <div class="desc">The Korean Crown</div></a>
    </div>
  <div class="gallery">
    <a href="https://splyce.gg/content/646/splyce-insights---solar" target="_blank"><img src="./images/Splyce 2.PNG">
      <div class="desc">Splyce Insights - Solar</div></a>
    </div>
</div>



</body>
</html>
