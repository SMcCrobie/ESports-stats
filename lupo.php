<!DOCTYPE html>
<html>
<title>PlayerCard</title>
<head>
  <link rel="stylesheet" href="./css/basics.css">
  <link rel="stylesheet" href="./css/gallery.css">
</head>

<?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/pc/DrLupo");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('TRN-Api-Key: 5a51739f-c967-4121-826e-5f0cb3b70222'));
        $response = curl_exec($ch);
        curl_close($ch);
        $fp = fopen("stats.json", "w");
        fwrite($fp, $response);
        fclose($fp);
?>


<?php
    $data = json_decode(file_get_contents("stats.json"));
    $solo = $data->stats->p2;//solos data
    $duos = $data->stats->p10;//duos data
    $squads = $data->stats->p9;//squads data
    $solo_wins = $solo->top1->valueInt;
    $duos_wins = $duos->top1->valueInt;
    $squads_wins = $squads->top1->valueInt;
    $solo_matches = $solo->matches->valueInt;
    $duos_matches = $duos->matches->valueInt;
    $squads_matches = $squads->matches->valueInt;
    $solo_kd = $solo->kd->valueDec;
    $duos_kd = $duos->kd->valueDec;
    $squads_kd = $squads->kd->valueDec;
    $solo_games = $solo->matches->valueInt;
    $duos_games = $duos->matches->valueInt;
    $squads_games = $squads->matches->valueInt;
    $solo_kills = $solo->kills->valueInt;
    $duos_kills = $duos->kills->valueInt;
    $squads_kills = $squads->kills->valueInt;
?>



<h1><a href="esportsmain.html">ESports Stats</a></h1>
<ul>
    <li><a href="esportsmain.html"> eSports</a></li>
    <li><a href="fortnite_home.html"> Home </a> </li>
    <li><a class ="active" href="fortnite_players.html"> Players</a> </li>
    <!--<li><a href="rankings.html"> Rankings</a> </li>-->
    <li class="search"><input type="text" name="search" placeholder="Search.."></li>
    <li class="title"><h2>Fortnite</h2></li>
</ul>


<h3> Ben "Dr Lupo" Lupo </h3>
<div class="bio">
 <div class="element"> <img class="player" src="images/ben.jpg"></img></div>
 <div class="element_text"><p>He is Dr. Lupo and he knows how to snipe. Ben Lupo is a top Fortnite player in the world, known for his Duo matches with Ninja and his proclivity for sniping.</p></div>
 <div class="element"><a href="fortnite_players.html"><img class="team_logo" src="images/lupo.jpg"></img></div>
</div>

<h3>Statistics</h3>
<div class="stats">
  <div class="basics">
    <table class="basics">
      <h4>Basics</h4>
    	<tr>
    		<th> Solo Wins </th>
      </tr>
      <tr>
      	<td><?php print_r($solo_wins);?></td>
      <tr>
    		<th> Duos Wins </th>
      </tr>
      <tr>
      	<td><?php print_r($duos_wins);?></td>
      </tr>
      <tr>
        <th> Squads Wins </th>
    	</tr>
      <tr>
      	<td><?php print_r($squads_wins);?></td>
      </tr>
    </table>
  </div>
  <div class="matchups">
    <h4>Match Statistics</h4>
    <table class="matchups">
      <tr>
        <th> Solo Kills </th>
        <th> Solo Matches </th>
        <th> Solo K/D </th>
      </tr>
      <tr>
      		<td><?php print_r($solo_kills);?></td>
		<td><?php print_r($solo_matches);?></td>
		<td><?php print_r($solo_kd);?></td>
      </tr>
      <tr>
        <th> Duos Kills </th>
        <th> Duos Matches </th>
        <th> Duos K/D </th>
      </tr>
      <tr>
      	<td><?php print_r($duos_kills);?></td>
	<td><?php print_r($duos_matches);?></td>
	<td><?php print_r($duos_kd);?></td>
      </tr>
      <tr>
        <th> Squads Kills </th>
        <th> Squads Matches </th>
        <th> Squads K/D </th>
      </tr>
      <tr>
        <td><?php print_r($squads_kills);?></td>
        <td><?php print_r($squads_matches);?></td>
        <td><?php print_r($squads_kd);?></td>
      </tr>
    </table>
  </div>
</div>

<div id = "yootube">
  <h3>Videos</h3>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
<div id="player">
</div>

<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
                               height: '290',
                               width: '390',
                               playerVars:
                               {
                               listType: 'playlist',
                               list: 'PLLb7YtvDEy5NmfTkzB66lfbTHmJIYLOWo'
                               }


                               });

    }
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    event.target.playVideo();
}
</script>
</div>



</html>


<style>
h3{
  font-family: starfont;
  text-decoration: underline;
  margin-bottom: 0px;
  font-weight: bold;
  margin-bottom: 10px;
  color: black;
  font-size: 25pt;
  z-index: 100;
}
h4{
  color: black;
  font-family: starfont;
  text-align: center;
  font-size: 18pt;
  margin: 10px;
  text-decoration: overline underline;
  display: block;
  z-index: 10;
}

div.element{
 margin: 0px;
 padding: 0px;
 margin-top: 15px;
 width: 18%;
 min-width: 210px;
 height: 200px;
 float: left;
 display: block;
}
div.element_text{
  float: left;
  width: 80%;
  display: block;
}
p{
 color: black;
 font-size:18pt;
 text-align: left;
}
div.bio{
  padding: 0px;
  margin: 0px;
  min-height: 200px;
  width: 100%;
  display: flex;
}
div.stats{
  background-color: #e6e6e6;
  border-radius: 25px;
  box-shadow: 5px 10px #333;
  padding: 8px;
  margin: 10px;
  width: 97%;
  display: flex;
}
div.news{
 margin-top: 70px;
 display: block;
 width 100%;
 height: auto;

}
div.basics{
  margin: 0px;
  padding:0px;
  width: 19%;
  float: left;
  padding-right: 10px;
  border-right: 5px inset;
  border-color: #333;
}
div.matchups{
  margin: 0px;
  padding: 0px;
  width: 79%;
  float: right;
}

table.basics{
	margin: 0px;
  width: 100%;
}
table.basics tr{
}
table.basics th{
  font-family: arial;
  text-decoration: underline;
  font-size: 15pt;
  color: #333;
}
table.basics td{
  padding-bottom: 15px;
	text-align: center;
  font-size: 14pt;
	color: black;
}

table.matchups{
	margin-top: 10px;
  width: 100%;
  height: auto;
}
table.matchups tr{
	font-size: 15pt;
	color: #977700;
}
table.matchups th{
  font-family: arial;
  font-size: 15pt;
  text-decoration: underline;
  color: #333;
}
table.matchups td{
  padding-bottom: 15px;
	text-align: center;
  font-size: 14pt;
	color: black;
}
img.team_logo{
 float: right;
 height: 200px;
 width: 200px;
 margin-top: 0px;
 margin-left: -200px;
 margin-right: 1px;
 //opacity: 0.4;
 //z-index: 1000;
}

img.player{
 height: 200px;
 width: 200px;
 margin: 20px;
 margin-top: 0px;
 margin-left: 1px;
 float: left;
 display: flex;
}
img.rSymbol{
  width: 18px;
  height: 18px;
  margin:0px;
  padding:0px;
}

div.gallery {
    width: 280px;
    height: 210px;
}

div.gallery img {
    width: 210px;
}




</style>
