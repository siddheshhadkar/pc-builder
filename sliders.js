var freqrange = document.getElementById('freqrange');
var corerange = document.getElementById('corerange');
var threadrange = document.getElementById('threadrange');
var pricerange = document.getElementById('pricerange');
var pricemoborange = document.getElementById('pricemoborange');
var priceramrange = document.getElementById('priceramrange');
var pricegpurange = document.getElementById('pricegpurange');
var freqgpurange = document.getElementById('freqgpurange');
noUiSlider.create(freqrange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
noUiSlider.create(freqgpurange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
noUiSlider.create(corerange, {
    start: [4, 8],
    connect:[false, true, false],
    step: 1,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [1],
        'max': [32]
    }
});
noUiSlider.create(threadrange, {
    start: [8, 12],
    connect:[false, true, false],
    step: 1,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [1],
        'max': [32]
    }
});
noUiSlider.create(pricerange, {
    start: [2000, 30000],
    connect:[false, true, false],
    step: 100,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [100000]
    },
    /*ariaFormat: wNumb({
        decimals: 1
    }),
    format: wNumb({
        decimals: 1,
        thousand: '.',
        suffix: ' (US $)'
    })*/
});
noUiSlider.create(pricemoborange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
noUiSlider.create(priceramrange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
noUiSlider.create(pricestoragerange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
noUiSlider.create(pricegpurange, {
    start: [3, 4],
    connect:[false, true, false],
    step: 0.25,
    behaviour: 'drag-tap',
    tooltips:false,
    animate:true,
    animationDuration:100,
    keyboardSupport:true,
    range: {
        'min': [0],
        'max': [6]
    }
});
function somefunction(values){
    /********SOME FUNCTION********/
}
var freqinputs = document.getElementsByClassName('freqvalue');
freqrange.noUiSlider.on('update', function (values, handle) {
    freqinputs[handle].value = values[handle];
    somefunction(values);
});
freqinputs[0].addEventListener('change', function(){
	freqrange.noUiSlider.set([this.value, null]);
});
freqinputs[1].addEventListener('change', function(){
    freqrange.noUiSlider.set([null, this.value]);
});
var coreinputs = document.getElementsByClassName('corevalue');
corerange.noUiSlider.on('update', function (values, handle) {
    coreinputs[handle].value = values[handle];
    somefunction(values);
});
coreinputs[0].addEventListener('change', function(){
	corerange.noUiSlider.set([this.value, null]);
});
coreinputs[1].addEventListener('change', function(){
	corerange.noUiSlider.set([null, this.value]);
});
var threadinputs = document.getElementsByClassName('threadvalue');
threadrange.noUiSlider.on('update', function (values, handle) {
    threadinputs[handle].value = values[handle];
    somefunction(values);
});
threadinputs[0].addEventListener('change', function(){
	threadrange.noUiSlider.set([this.value, null]);
});
threadinputs[1].addEventListener('change', function(){
	threadrange.noUiSlider.set([null, this.value]);
});
var priceinputs = document.getElementsByClassName('pricevalue');
pricerange.noUiSlider.on('update', function (values, handle) {
    priceinputs[handle].value = values[handle];
    somefunction(values);
});
priceinputs[0].addEventListener('change', function(){
	pricerange.noUiSlider.set([this.value, null]);
});
priceinputs[1].addEventListener('change', function(){
	pricerange.noUiSlider.set([null, this.value]);
});