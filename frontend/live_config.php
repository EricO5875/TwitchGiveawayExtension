<!doctype html>
<!--
Copyright 2017 Amazon.com, Inc. or its affiliates. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License"). You may not use this file except in compliance with the License. A copy of the License is located at

    http://aws.amazon.com/apache2.0/

or in the "license" file accompanying this file. This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
-->
<!--

   Use this file as a starting point for your live configuration extension view.

-->
<?php
    session_start();
?>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/common.css">
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/live_config.css" rel="stylesheet">
    </head>
    <body>
        <h1 id=headSettings>Giveaway Settings</h1>

        <div class="container">

            <ul class="tabs">
        		<li class="tab-link current" data-tab="tab-1">All</li>
        		<li class="tab-link" data-tab="tab-2">Active</li>
        		<li class="tab-link" data-tab="tab-3">Button</li>
        	</ul>

            <div id="tab-1" class="tab-content current">
			    <button type="button" id="btnPassive" class="btnTwitch" value="Start Passive Giveaway">Start Passive Giveaway</button> <br> <br>
                <label class="description"> Followers Only </label> <input type="checkbox" id="chkFollowerOnly" onClick=""> <br> <br>
    	        <label class="description"> Subscribers Only </label> <input type="checkbox" id="chkSubOnly"> <br> <br>
    	        <label class="description"> Block Moderators </label> <input type="checkbox" id="chkBlockMods"> <br> <br>
    	        <label class="description"> Number of Winners </label> <input type="textbox" id="txtNumberOfWinners">
            </div>
            <div id="tab-2" class="tab-content">
			    <button type="button" id="btnActive" class="btnTwitch" value="Start Active Giveaway">Start Active Giveaway</button> </br> </br>
                <label class="description"> AFK Timer </label> <br>
                <input type = "textbox" id="txtMin"> <label class="description"> Minutes </label>
            </div>
            <div id="tab-3" class="tab-content">
			    <button type="button" id="btnEntry" class="btnTwitch" value="Start Entry Giveaway">Start Entry Giveaway</button>
            </div>
        </div>

		<div id="divRoll">
			<button type="button" id="btnRoll" class="btnTwitch" value="Roll for Winners">Roll for Winners</button> </br> </br>
			<button type="button" id="btnEnd" class="btnTwitch" value="End Giveaway">End Giveaway</button>
		</div>
        <script src="https://extension-files.twitch.tv/helper/v1/twitch-ext.min.js"></script>
        <script src="../js/jquery/jquery.min.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/live_config.js"></script>
    </body>

    <script>
        $('.btnTwitch').click(function() {
            var clickBtnValue = $(this).val();
            var ajaxurl = 'ajax.php',
            data =  {'action': clickBtnValue};
            console.log(clickBtnValue);
            console.log(data);
            $.post(ajaxurl, data, function (response) {

            });
        });
    </script>
</html>
