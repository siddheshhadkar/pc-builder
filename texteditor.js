rtf.document.designMode = 'On';
function exec(command){
	rtf.document.execCommand(command, false, null);
}
function execop(command, arg){
	rtf.document.execCommand(command, false, arg);
}