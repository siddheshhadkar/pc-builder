<!DOCTYPE html>
<html>
<head>
	<title>texteditor</title>
	<link rel="stylesheet" type="text/css" href="texteditor.css">
</head>
<body>
	<div id="com">
		<button onclick="exec('bold')">Bold</button>
		<button onclick="exec('italic')">Italic</button>
		<button onclick="exec('underline')">Underline</button>
		<button onclick="exec('strikeThrough')">Strikethrough</button>
		<button onclick="exec('indent')">Indent</button>
		<button onclick="exec('outdent')">Dedent</button>
		<button onclick="exec('justifyLeft')">Justify left</button>
		<button onclick="exec('justifyRight')">Justify right</button>
		<button onclick="exec('justifyCenter')">Justify center</button>
		<button onclick="exec('justifyFull')">justify full</button>
		<button onclick="exec('insertParagraph')">Insert Para</button>
		<button onclick="exec('undo')">Undo</button>
		<button onclick="exec('redo')">Redo</button>
		<button onclick="exec('superscript')">Superscript</button>
		<button onclick="exec('subscript')">Subscript</button>
		<button onclick="exec('insertUnorderedList')">UL</button>
		<button onclick="exec('insertOrderedList')">OL</button>
		<button onclick="exec('cut')">Cut</button>
		<button onclick="exec('copy')">Copy</button>
		<button onclick="exec('paste')">Paste</button>
		<button onclick="exec('selectAll')">Select all</button>
		<select onchange="execop('fontName', this.value)">
			<option value="Arial">Arial</option>
			<option value="Comic Sans MS">Comic Sans MS</option>
			<option value="Courier">Courier</option>
			<option value="Georgia">Georgia</option>
			<option value="Tahoma">Tahoma</option>
			<option value="Times New Roman">Times New Roman</option>
		</select>
		<button onclick="exec('insertHorizontalRule')">HR</button>
		<button onclick="execop('createLink', prompt('Enter a link:', 'http://'))">Link</button>
		<label for="foreground">Foreground : </label><input type="color" name="foreground" id="foreground"/ onchange="execop('foreColor', this.value)">
		<label for="background">Background : </label><input type="color" name="background" id="background"/ onchange="execop('backColor', this.value)">
		<select onchange="execop('fontSize', this.value)">
			<option value="1">font size 1</option>
			<option value="2">font size 2</option>
			<option value="3">font size 3</option>
			<option value="4">font size 4</option>
			<option value="5">font size 5</option>
			<option value="6">font size 6</option>
			<option value="7">font size 7</option>
		</select>
		<button onclick="execop('insertImage', prompt('Enter Image URL : '))">Insert image</button>
		<input type="file" onchange="alert(this.value)">
		<input type="url" onclick="execop('insertImage', this.value)">
		<button onclick="exec('insertLineBreak')">Insert linebreak</button>
	</div>
	<div id="text">
		
	</div>
	<iframe name="rtf" id="rtf"></iframe>
	<button id="but">Copy</button>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jqueryui/jquery-ui.js"></script>
	<script type="text/javascript" src="texteditor.js"></script>
	<script type="text/javascript" src="texteditorbut.js"></script>
</body>
</html>