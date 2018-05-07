function nesScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
function snesScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
function gameCubeScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
function wiiScene(){
    nSwitch = 3;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}
var spinning = false;
var headlightOn = true;
var omniLightsOn = false;
var spotLightOn = false;


function spin()
{
	spinning = !spinning;
	document.getElementById('model__Rotation').setAttribute('enabled', spinning.toString());
}

function stopSpin()
{
	spinning = false;
	document.getElementById('model__Rotation').setAttribute('enabled', spinning.toString());
}

function wireframeRender()
{
	var e = document.getElementById('modelWire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function defaultLights()
{
	headlightOn = !headlightOn;
	document.getElementById('model__headlight').setAttribute('headlight', headlightOn.toString());
}
function omniLights()
{
	omniLightsOn = !omniLightsOn;
	document.getElementById('model__Omni01').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni02').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni03').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni04').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni05').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni06').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni07').setAttribute('on', omniLightsOn.toString());
	document.getElementById('model__Omni08').setAttribute('on', omniLightsOn.toString());
}
function spotLight()
{
	spotLightOn = !spotLightOn;
	document.getElementById('model__Spot01').setAttribute('on', spotLightOn.toString());
}
function resetView()
{
	var e = document.getElementById('modelWire');
	e.runtime.resetView(true);
	
}
function nextView()
{
	var e = document.getElementById('modelWire');
	e.runtime.nextView(true);
}

