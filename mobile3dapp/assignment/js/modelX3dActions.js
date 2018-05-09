
var spinning = false;
var headlightOn = true;
var omniLightsOn = false;
var spotLightOn = false;

// Start Spin
function spin()
{
	spinning = !spinning;
	document.getElementById('model__Rotation').setAttribute('enabled', spinning.toString());
}
// Stop Spin
function stopSpin()
{
	spinning = false;
	document.getElementById('model__Rotation').setAttribute('enabled', spinning.toString());
}
// Toggle points 
function wireframeRender()
{
	var e = document.getElementById('modelWire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}
//Toggle headlight
function defaultLights()
{
	headlightOn = !headlightOn;
	document.getElementById('model__headlight').setAttribute('headlight', headlightOn.toString());
}
//Toggle Omni lights
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
//toggle spotLight
function spotLight()
{
	spotLightOn = !spotLightOn;
	document.getElementById('model__Spot01').setAttribute('on', spotLightOn.toString());
}
//Reset the current View
function resetView()
{
	var e = document.getElementById('modelWire');
	e.runtime.resetView(true);
	
}
// Go to next View
function nextView()
{
	var e = document.getElementById('modelWire');
	e.runtime.nextView(true);
}

