/*
Copyright 2017 Amazon.com, Inc. or its affiliates. All Rights Reserved.

Licensed under the Apache License, Version 2.0 (the "License"). You may not use this file except in compliance with the License. A copy of the License is located at

    http://aws.amazon.com/apache2.0/

or in the "license" file accompanying this file. This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
*/

/*

  Set Javascript specific to the extension live configuration view in this file.

*/

$(document).ready(function()
 {
    $('ul.tabs li').click(function()
    {
        var tab_id = $(this).attr('data-tab');

    	$('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

});

function activateUseAll() {
  var btn = document.getElementById("btnUseAll")
  btn.disabled = true;

  var viewerSide = window.open("viewer.html");
  viewerside.document.getElementByID("divMain").style.display = "none";
  viewerside.document.getElementByID("divUseAll").style.display = "block";
}